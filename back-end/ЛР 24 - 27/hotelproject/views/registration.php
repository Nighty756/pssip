<?php 
    include("path.php");
    include("../app/controllers/users.php"); 
?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/registration.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/iconfonts.css">
    <title>Document</title>
</head>
<body>
    <div class="wrapper">

  <!---------------- Шапка сайта ---------------->
  <?php include("include/header.php"); ?>

         <!---------------- Контент сайта ---------------->
        <main class="page">
            <section class="registration_block">
                <div class="registration_container _container">
                    <div class="registration_body">
                        <h1>Регистрация</h1>
                        <div class="registration_form_block">
                        <form action="registration.php" method="post" class="registration_form">
                            <div class="input_item">
                                <label class="input-label" for="name">Имя</label>
                                <input name="name" value="<?= $name ?>" type="text" id="name" placeholder="Введите ваше имя" />
                                <?= $err['name'] ?>
                            </div>
                            <div class="input_item">
                                <label class="input-label" for="surname">Фамилия</label>
                                <input name="surname" value="<?= $surname ?>" type="text" id="surname" placeholder="Введите вашу фамилию" />
                                <?= $err['surname'] ?>
                            </div>
                            <div class="input_item">
                                <label class="input-label" for="patronymic">Отчество</label>
                                <input name="patronymic" value="<?= $patronymic ?>" type="text" id="patronymic" placeholder="Введите ваше отчество" /> 
                                <?= $err['patronymic'] ?>  
                            </div>
                  
                            <div class="input_item">
                            
                                <label class="input-label" for="login">Логин</label>
                                <input name="login" value="<?= $login ?>" type="text" id="login" placeholder="Введите логин" />  
                                <?= $err['login'] ?> 
                            </div>
                            <div class="input_item">
                                <label class="input-label" for="email">Email</label>
                                <input name="email" value="<?= $email ?>" type="text" id="email" placeholder="Введите ваш email" />
                                <?= $err['email'] ?>
                            </div>
                        
                            <div class="input_item">
                                <label class="input-label" for="password">Пароль</label>
                                <input name="pass-first" type="password" id="password" placeholder="Введите пароль" />  
                                <?= $err['pass-first'] ?> 
                            </div>
                            <div class="input_item">
                                <label class="input-label" for="password_confirmation">Подтверждение пароля</label>
                                <input name="pass-second" type="password" id="password_confirmation" placeholder="Повторите пароль" />   
                                <?= $err['pass-first'] ?> 
                            </div>
                            <button type="submit" name="button-reg" class="registration_btn">Зарегистрироваться</button>
                        </form>
                        <div class="registration_info">Уже есть аккаунт?<a href="authorization.php">Авторизоваться</a></div>
                     </div>
                    </div>
                </div>
            </section>
        </main>

        <!---------------- Подвал сайта ---------------->
        <?php include("include/footer.php"); ?>
    </div>
           <!---------------- Подключение скриптов---------------->
           <script src="js/script.js"></script>
</body>
</html>