<?php 

include("C:/OSPanel/domains/hotelproject/views/path.php");
include ("C:/OSPanel/domains/hotelproject/app/database/connectdb.php");
include("C:/OSPanel/domains/hotelproject/app/database/functiondb.php");


$errMsg = '';
$errFile = '';

$id = '';
$title = '';
$cost = '';
$description = '';
$equipment = '';
$guests = '';
$bed = '';
$square = '';

$category = '';
$number_room = '';
$state = '';

$apartaments = selectAll('apartments');
$vouchers = selectAll('voucher');
$rooms= selectCategory('apartments', 'rooms');


$pattern_ru = '/[а-я]/i';

$errr = [];
$flag = 0;

// Создание категории
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['apart-create'])){

    $destination = ROOT_PATH . "\img\slider-rooms\\";

    if( isset($_FILES['img']['name'])) {
  
        $total_files = count($_FILES['img']['name']);
       
        for($key = 0; $key < $total_files; $key++) {
       
          // Check if file is selected
          if(isset($_FILES['img']['name'][$key]) 
                            && $_FILES['img']['size'][$key] > 0) {
       
            $original_filename = uniqid() . $_FILES['img']['name'][$key];
         
            $imgarr[] =  $original_filename;
            $target = $destination . basename($original_filename);
            $tmp  = $_FILES['img']['tmp_name'][$key];
                 
         
      
            move_uploaded_file($tmp, $target);
          
   
          }
      
        }
       
      }

  
    $title = trim($_POST['title']);
    $cost = trim($_POST['cost']);
    $description = trim($_POST['description']);
    $equipment = trim($_POST['equipment']);
    $guests = $_POST['guests'];
    $bed = $_POST['bed'];
    $square = trim($_POST['square']); 

    
    if (!preg_match($pattern_ru, $title)) {
      $err['title'] = '<small class="text-danger">Здесь должны использоваться только русские буквы</small>';
      $flag = 1;
    }

    if (empty($title)) {
      $err['title'] = '<small class="text-danger">Поле не может быть пустым</small>';
      $flag = 1;
    }
    if (mb_strlen($title) < 2) {
      $err['title'] = '<small class="text-danger"> Название категории должно быть более 2 символов</small>';
      $flag = 1;
    }

    if (!filter_var($cost, FILTER_VALIDATE_INT)) {
      $err['cost'] = '<small class="text-danger">Допускается только ввод чисел</small>';
      $flag = 1;
    }
    
    if (!filter_var($bed, FILTER_VALIDATE_INT)) {
      $err['bed'] = '<small class="text-danger">Допускается только ввод чисел</small>';
      $flag = 1;
    }

    if (!filter_var($square, FILTER_VALIDATE_INT)) {
      $err['square'] = '<small class="text-danger">Допускается только ввод чисел</small>';
      $flag = 1;
    }


    if (empty($cost)) {
      $err['cost'] = '<small class="text-danger">Поле не может быть пустым</small>';
      $flag = 1;
    }
    
    if (!preg_match($pattern_ru, $description)) {
      $err['description'] = '<small class="text-danger">Здесь должны использоваться только русские буквы</small>';
      $flag = 1;
    }

    if (empty($description)) {
      $err['description'] = '<small class="text-danger">Поле не может быть пустым</small>';
      $flag = 1;
    }
    
    if (!preg_match($pattern_ru, $equipment)) {
      $err['equipment'] = '<small class="text-danger">Здесь должны использоваться только русские буквы</small>';
      $flag = 1;
    }

    if (empty($equipment)) {
      $err['equipment'] = '<small class="text-danger">Поле не может быть пустым</small>';
      $flag = 1;
    }
   
    if ($flag == 0) {

      $existence = selectOne('apartments', ['title' => $title]);
      if ($existence['title'] === $title){
        $errMsg = '<small class="text-danger">Такая категория номеров уже есть!</small>';

      } else {
        $apartament = [
            'title' => $title,
            'cost' => $cost,
            'description' => $description,
            'equipment' => $equipment,
            'guests' => $guests,
            'bed' => $bed,
            'square' => $square,
            
         ];
  
    
        
       
         $id = insert('apartments', $apartament);
         
         foreach ($imgarr as $filename) {
   
            $apartimg = insertimg('apartslider', $filename, $id);
        }
         $apartament = selectOne('apartments', ['id' => $id]);
         header('location: ' . BASE_URL . 'apartments.php');
  
      }
  
    }
  
  
  } else {
     $title = '';
     $cost = '';
     $description = '';
     $equipment = '';
     $bed = '';
     $square = '';
     $img = '';
 
  }


  // Редактирование комнаты
  if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id_room'])){

    $id_room = $_GET['id_room'];
    $room = selectOne('rooms', ['id' =>  $id_room]);


    $id_room = $room['id'];
    $category = $room['id_category'];
    $number_room = $room['number_room'];
    $state = $room['state'];
   
  }

// Редактирование комнаты
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['room_edit'])){

  $category = trim($_POST['category']);
  $number_room = trim($_POST['number_room']);
  $state = $_POST['state'];

  if (!filter_var($number_room, FILTER_VALIDATE_INT)) {
    $err['number_room'] = '<small class="text-danger">Допускается только ввод чисел</small>';
    $flag = 1;
  }
  if (empty($number_room)) {
    $err['number_room'] = '<small class="text-danger">Поле не может быть пустым</small>';
    $flag = 1;
  }
  if ($flag == 0) {

    
      $roomsupd = [
          'id_category' => $category,
          'number_room' => $number_room,
          'state' => $state,
         
       ];
       $idroom = $_POST['id'];
       $roomsql = update('rooms', $idroom, $roomsupd);
      header('location: ' . BASE_URL . 'rooms-admin.php');

    }
} 



//-----------------------------------------------------------------------------------------------------------------------------------------------------------
  // Редактирование категории
  if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])){

    $id = $_GET['id'];
    $apartament = selectOne('apartments', ['id' => $id]);
    $apartimg = selectAll('apartslider', ['id_category' => $id]);

    $id = $apartament['id'];
    $title = $apartament['title'];
    $cost = $apartament['cost'];
    $description = $apartament['description'];
    $equipment = $apartament['equipment'];
    $guests = $apartament['guests'];
    $bed = $apartament['bed'];
    $square = $apartament['square'];
   
  }

  // Редактирование категории
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['apart-edit'])){
  $destination = ROOT_PATH . "\img\slider-rooms\\";
  if( isset($_FILES['img']['name'])) {
  
    $total_files = count($_FILES['img']['name']);
   
    for($key = 0; $key < $total_files; $key++) {
   
      // Check if file is selected
      if(isset($_FILES['img']['name'][$key]) 
                        && $_FILES['img']['size'][$key] > 0) {
   
        $original_filename = uniqid() . $_FILES['img']['name'][$key];
        $imgarrs[] =  $original_filename;
        $target = $destination . basename($original_filename);
        $tmp  = $_FILES['img']['tmp_name'][$key];
        move_uploaded_file($tmp, $target);
  
      }
  
    }
   
  }

  $title = trim($_POST['title']);
  $cost = trim($_POST['cost']);
  $description = trim($_POST['description']);
  $equipment = trim($_POST['equipment']);
  $bed = trim($_POST['bed']);
  $square = trim($_POST['square']);
  $guests = $_POST['guests'];
  $img = $_FILES['img'];



  
  if (!preg_match($pattern_ru, $title)) {
    $err['title'] = '<small class="text-danger">Здесь должны использоваться только русские буквы</small>';
    $flag = 1;
  }

  if (empty($title)) {
    $err['title'] = '<small class="text-danger">Поле не может быть пустым</small>';
    $flag = 1;
  }
  if (mb_strlen($title) < 2) {
    $err['title'] = '<small class="text-danger"> Название категории должно быть более 2 символов</small>';
    $flag = 1;
  }

  if (!filter_var($cost, FILTER_VALIDATE_INT)) {
    $err['cost'] = '<small class="text-danger">Допускается только ввод чисел</small>';
    $flag = 1;
  }

  if (!filter_var($bed, FILTER_VALIDATE_INT)) {
    $err['bed'] = '<small class="text-danger">Допускается только ввод чисел</small>';
    $flag = 1;
  }

  if (!filter_var($square, FILTER_VALIDATE_INT)) {
    $err['square'] = '<small class="text-danger">Допускается только ввод чисел</small>';
    $flag = 1;
  }

  if (empty($cost)) {
    $err['cost'] = '<small class="text-danger">Поле не может быть пустым</small>';
    $flag = 1;
  }
  
  if (!preg_match($pattern_ru, $description)) {
    $err['description'] = '<small class="text-danger">Здесь должны использоваться только русские буквы</small>';
    $flag = 1;
  }

  if (empty($description)) {
    $err['description'] = '<small class="text-danger">Поле не может быть пустым</small>';
    $flag = 1;
  }
  
  if (!preg_match($pattern_ru, $equipment)) {
    $err['equipment'] = '<small class="text-danger">Здесь должны использоваться только русские буквы</small>';
    $flag = 1;
  }

  if (empty($equipment)) {
    $err['equipment'] = '<small class="text-danger">Поле не может быть пустым</small>';
    $flag = 1;
  }
 
  if ($flag == 0) {

    
      $apartament = [
          'title' => $title,
          'cost' => $cost,
          'description' => $description,
          'equipment' => $equipment,
          'guests' => $guests,
          'bed' => $bed,
          'square' => $square,
         
       ];
   

       $id = $_POST['id'];
       $apartimg = delimg('apartslider', $id,   $imgf);
       foreach ($imgarrs as $imgf) {
        
      $apartimg = insertimg('apartslider', $imgf, $id);
    }
       $apartament_id = update('apartments', $id, $apartament);
      header('location: ' . BASE_URL . 'apartments.php');

    }
} 


   

         //Информация о клиенте
         if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id_сlient'])){
          $id_client = $_GET['id_сlient'];
          $vouchs = selectOne('client', ['id' => $id_client]);
        
       
          $surname =  $vouchs['surname'];
          $name =  $vouchs['name'];
          $patronymic =  $vouchs['patronymic'];
          $email =  $vouchs['email'];
          $telephone =  $vouchs['telephone'];
         } 

                  //Информация о категории номера
         if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id_apart'])){
          $id_apart = $_GET['id_apart'];
          $apinfo = selectOne('apartments', ['id' => $id_apart]);
       
          $title =  $apinfo['title'];
          $description =  $apinfo['description'];
          $cost =  $apinfo['cost'];
          $guests =  $apinfo['guests'];
          $equipment =  $apinfo['equipment'];
          $bed =  $apinfo['bed'];
          $square =  $apinfo['square'];
         } 

  // Удаление категории номера
  if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['del_id'])){
    $id = $_GET['del_id'];
    delete('apartments', $id);
    delete('apartslider', $id);
    header('location: ' . BASE_URL . 'apartments.php');
  }

