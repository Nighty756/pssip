<?php
include("../app/database/functiondb.php");


$pattern_ru = '/[а-я]/i';
$pattern_eng = '/[a-z]/i';
$err = [];
$flag = 0;

function userAuth($user){
  $_SESSION['id'] = $user['id'];
  $_SESSION['login'] = $user['username'];
  $_SESSION['admin'] = $user['admin'];
  $_SESSION['name'] = $user['name'];
  $_SESSION['surname'] = $user['surname'];
  $_SESSION['patronymic'] = $user['patronymic'];
  $_SESSION['email'] = $user['email'];
  if ($_SESSION['admin']) {
   header('location: ' . BASE_URL . "apartments.php");
  } else {
   header('location: ' . BASE_URL );
  }
}

// Код для формы регистрации
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-reg'])){

  $admin = 0;
  $name = trim($_POST['name']);
  $surname = trim($_POST['surname']);
  $patronymic = trim($_POST['patronymic']);
  $login = trim($_POST['login']);
  $email = trim($_POST['email']);
  $passF = trim($_POST['pass-first']);
  $passS = trim($_POST['pass-second']);
  
  if (!preg_match($pattern_ru, $name)) {
    $err['name'] = '<small class="text-danger">Здесь должны использоваться только русские буквы</small>';
    $flag = 1;
  }
  if (mb_strlen($name) > 15) {
    $err['name'] = '<small class="text-danger">Имя должно быть не больше 15 символов</small>';
    $flag = 1;
  }
  if (empty($name)) {
    $err['name'] = '<small class="text-danger">Поле не может быть пустым</small>';
    $flag = 1;
  }
  if (!preg_match($pattern_ru, $surname)) {
    $err['surname'] = '<small class="text-danger">Здесь должны использоваться только русские буквы</small>';
    $flag = 1;
  }
  if (mb_strlen($surname) > 30) {
    $err['surname'] = '<small class="text-danger">Имя должно быть не больше 30 символов</small>';
    $flag = 1;
  }
  if (empty($surname)) {
    $err['surname'] = '<small class="text-danger">Поле не может быть пустым</small>';
    $flag = 1;
  }
  if (!preg_match($pattern_ru, $patronymic)) {
    $err['patronymic'] = '<small class="text-danger">Здесь должны использоваться только русские буквы</small>';
    $flag = 1;
  }
  if (mb_strlen($patronymic) > 30) {
    $err['patronymic'] = '<small class="text-danger">Имя должно быть не больше 30 символов</small>';
    $flag = 1;
  }
  if (empty($patronymic)) {
    $err['patronymic'] = '<small class="text-danger">Поле не может быть пустым</small>';
    $flag = 1;
  }
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $err['email'] = '<small class="text-danger">Формат email неверный</small>';
    $flag = 1;
  }
  if (empty($email)) {
    $err['email'] = '<small class="text-danger">Поле не может быть пустым</small>';
    $flag = 1;
  }
  if (!preg_match($pattern_eng, $login)) {
    $err['login'] = '<small class="text-danger">Здесь должны использоваться только английские буквы</small>';
    $flag = 1;
  }
  if (empty($login)) {
    $err['login'] = '<small class="text-danger">Поле не может быть пустым</small>';
    $flag = 1;
  }
  if (mb_strlen($login) < 3) {
    $err['login'] = '<small class="text-danger">Логин должен быть более 2-х символов</small>';
    $flag = 1;
  }
  if (empty($passF)) {
    $err['pass-first'] = '<small class="text-danger">Поле не может быть пустым</small>';
    $flag = 1;
  }
  if (mb_strlen($passF) < 9) {
    $err['pass-first'] = '<small class="text-danger">Пароль должен быть не менее 9 символов</small>';
    $flag = 1;
  }
  if ($passF !== $passS) {
    $err['pass-first'] = '<small class="text-danger">Пароли в обеих полях должны соответствовать!</small>';
  } 
  if ($flag == 0) {
    $existence = selectOne('users', ['email' => $email]);
    if ($existence['email'] === $email){
      $err['email'] = '<small class="text-danger">Пользователь с такой почтой уже зарегистрирован!</small>';
    } else {
      $pass = password_hash($passF, PASSWORD_DEFAULT);
      $post = [
          'admin' => $admin,
          'name' => $name,
          'surname' => $surname,
          'patronymic' => $patronymic,
          'username' => $login,
          'email' => $email,
          'password' => $pass
       ];
       $id = insert('users', $post);
       $user = selectOne('users', ['id' => $id]);
       userAuth($user);
      

    }

  }


} else {
   $name = '';
   $surname = '';
   $patronymic = '';
   $login = '';
   $email = '';
}

//Код для формы авторизации
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-log'])){
  $email = trim($_POST['email']);
  $pass = trim($_POST['password']);
  
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $err['email'] = '<small class="text-danger">Формат email неверный</small>';
    $flag = 1;
  }
  if (empty($email)) {
    $err['email'] = '<small class="text-danger">Поле не может быть пустым</small>';
    $flag = 1;
  }
  if (empty($pass)) {
    $err['password'] = '<small class="text-danger">Поле не может быть пустым</small>';
    $flag = 1;
  }
  if (mb_strlen($pass) < 9) {
    $err['password'] = '<small class="text-danger">Пароль должен быть не менее 9 символов</small>';
    $flag = 1;
  }
  if ($flag == 0) { 
    $existence = selectOne('users', ['email' => $email]);
   if ($existence && password_verify($pass, $existence['password'])) {
    userAuth($existence);
   } else {
    $errMsg = '<small class="text-danger">Почта или пароль введены неверно!</small>';
   }
  }

  
} else {
  $email = '';
}

 

