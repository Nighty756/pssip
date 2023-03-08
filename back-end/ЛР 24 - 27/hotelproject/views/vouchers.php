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
        <h1 class="aparts_title title_block">Бронирование</h1>
    
        <div class="aparts_body">
      
              
            <table class="table">
            <thead>
<tr><th>ID</th><th>Информация о апартаменте и клиенте</th><th>Дата заезда</th><th>Дата выезда</th><th>Гости</th><th>Дата бронирования</th><th>Общая стоимость</th></tr>
</thead>
<?php foreach ($vouchers as $key => $vouch): ?>
<tbody>
<tr>
    <td><?= $vouch['id']; ?></td>

    <td><a class="client_link" href="client.php?id_сlient=<?= $vouch['id_client']?>&id_apart=<?=$vouch['id_category']?>"> Информация </a></td>
    <td><?= $vouch['arrival_date']; ?></td>
    <td><?= $vouch['date_departure']; ?></td>
    <td><?= $vouch['guests']; ?></td>
    <td><?= $vouch['booking_date']; ?></td>
    <td><?= $vouch['total_cost'];?> BYN</td>
</tr>
</tbody>
<?php endforeach; ?>
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