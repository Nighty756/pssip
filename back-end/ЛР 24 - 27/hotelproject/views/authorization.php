<?php include("path.php"); 
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
    <link rel="stylesheet" href="css/authorization.css">
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
            <section class="authorization_block">
                <div class="authorization_container _container">
                    <div class="registration_body">
                        <h1>Авторизация</h1>
                        <div class="authorization_form_block">
                        <form action="authorization.php" method="post" class="authorization_form">
                            <?= $errMsg ?>
                            <div class="input_item">
                                <label class="input-label" for="email">Ваша почта (при регистрации)</label>
                                <input name="email" value="<?= $email ?>" type="text" id="email" placeholder="Введите ваш email" />  
                                <?= $err['email'] ?>
                            </div>
                            <div class="input_item">
                                <label class="input-label" for="password">Пароль</label>
                                <input name="password" type="password" id="password" placeholder="Введите пароль" />   
                                <?= $err['password'] ?> 
                            </div>
                            <button type="submit" name="button-log" class="authorization_btn">Авторизоваться</button>
                        </form>
                        <div class="authorization_info">Нету аккаунта?<a href="registration.php">Зарегистрироваться</a></div>
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