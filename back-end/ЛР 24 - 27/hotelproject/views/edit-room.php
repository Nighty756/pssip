<?php session_start();
      include("path.php");  
      include("../app/controllers/apartbd.php");
     


?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/general.css">
        <link rel="stylesheet" href="css/header.css">
        <link rel="stylesheet" href="css/footer.css">
        <link rel="stylesheet" href="css/iconfonts.css">
        <link rel="stylesheet" href="css/admin.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    <title>GrantAvgustov</title>
</head>
<body>
    <div class="wrapper">
          <!---------------- Шапка сайта ---------------->
          <?php include("include/header-admin.php"); ?>


<!---------------- Контент сайта ---------------->
<main class="page">

<!---------------- Сайдбар ---------------->
<?php include("include/sidebar-admin.php"); ?>

<section class="aparts_block">
    <div class="aparts_container container">
        <h1 class="aparts_title title_block">Редактирование комнаты</h1>
       
        <div class="aparts_body">
         
                <div class="apparts_btn">
                    <a href="<?php echo BASE_URL . "create.php"?>" class="add-btn" type="button">Добавить</a>
                    <a href="<?php echo BASE_URL . "apartments.php"?>" class="edit-btn" type="button">Редактировать</a>
                </div>
            <form method="post" action="edit-room.php">
                    <?= $errMsg ?>
                    <input type="hidden" value="<?=  $id_room ?>" name="id"> 
                    <div class="aparts_input-group">
                        <label class="input-label" for="title">Категория номера</label>
                        <input type="text" value="<?= $category ?>" id="title" name="category"> 
                        <?= $err['title'] ?>
                    </div>
                   
                    
                    <div class="aparts_input-group">
                        <label class="input-label" for="text">Номер комнаты</label>
                        <input type="text" value="<?= $number_room ?>" id="name" name="number_room">
                        <?= $err['number_room'] ?>
                    </div>
                    <div class="aparts_input-group">
                    <p class="select-label">Количество спальных мест</p>
                        <select name="state">
                            <option value="Свободен">Свободен</option>
                            <option value="Забронирован">Забронирован</option>
                        </select>
                    </div>


                    <button type="submit" name="room_edit" class="aparts_btn">Обновить категорию</button>
            </form>
           
        </div>
    </div>
</section>

</main>

<!---------------- Подвал сайта ---------------->


<script src="https://kit.fontawesome.com/518db68f48.js" crossorigin="anonymous"></script>
<script src="js/input-file.js"></script>
</div>
</body>
</html>