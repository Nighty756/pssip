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
        <h1 class="aparts_title title_block">Управление комнатами</h1>
    
        <div class="aparts_body">
        <div class="apparts_btn">
                    <a href="<?php echo BASE_URL . "create.php"?>" class="add-btn" type="button">Добавить</a>
                    <a href="<?php echo BASE_URL . "apartments.php"?>" class="edit-btn" type="button">Редактировать</a>
                </div>
              
            <table class="table">
            <thead>
<tr><th>ID</th><th>Категория</th><th>Номер комнаты</th><th>Состояние</th><th>Редактирование</th><th>Удалить</th></tr>
</thead>
<?php foreach ($rooms as $key => $room): ?>
<tbody>
<tr>
    <td><?= $room['id']; ?></td>

    <td><?= $room['title'] ?></td>

    <td><?= $room['number_room']; ?></td>
    <td><?= $room['state']; ?></td>

    <td><a class="edit-link" href="edit-room.php?id_room=<?= $room['id']; ?>">edit</a></td>
    <td><a class="del-link" href="edit-room.php?del_id=<?= $room['id']; ?>">delete</a></td>
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