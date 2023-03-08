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
        <h1 class="aparts_title title_block">Инфомарция о клиенте</h1>
    
        <div class="aparts_body">
      
              
            <table class="table">
            <thead>
<tr><th>ID</th><th>Фамилия</th><th>Имя</th><th>Отчество</th><th>email</th><th>Телефон</th></tr>
</thead>

<tbody>
<tr>
    <td><?= $id_client ?></td>
    <td><?=  $surname ?></td>
    <td><?= $name ?></td>
    <td><?= $patronymic ?></td>
    <td><?= $email ?></td>
    <td><?= $telephone ?></td>

</tr>
</tbody>

</table>
<h1 class="aparts_title title_block">Инфомарция о категории номера</h1>
<table class="table">
            <thead>
<tr><th>ID</th><th>Название</th><th>Описание</th><th>Стомость в сутки</th><th>Гости</th><th>Оснащение</th><th>Кол-во спальных мест</th><th>Площадь номера</th></tr>
</thead>

<tbody>
<tr>
    <td><?= $id_apart ?></td>
    <td><?= $title ?></td>
    <td><?= $description ?></td>
    <td><?= $cost ?> BYN</td>
    <td><?= $guests ?></td>
    <td><?= $equipment ?></td>
    <td><?= $bed ?></td>
    <td><?= $square ?> м<sup>2</sup></td>
</tr>
</tbody>

</table>

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