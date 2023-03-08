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
        <h1 class="aparts_title title_block">Управление апартаментами</h1>
    
        <div class="aparts_body">
        <div class="apparts_btn">
                    <a href="<?php echo BASE_URL . "create.php"?>" class="add-btn" type="button">Добавить</a>
               
                </div>
              
            <table class="table">
            <thead>
<tr><th>ID</th><th>Название</th><th>Описание</th><th>Стомость в сутки</th><th>Оснащение</th><th>Редактировать</th><th>Удалить</th></tr>
</thead>
<?php foreach ($apartaments as $key => $apart): ?>
<tbody>
<tr>
    <td><?= $key + 1; ?></td>
    <td><?= $apart['title']; ?></td>
    <td><?= $apart['description']; ?></td>
    <td><?= $apart['cost']; ?> BYN</td>
    <td><?= $apart['equipment']; ?></td>
    <td><a class="edit-link" href="edit.php?id=<?= $apart['id']; ?>">edit</a></td>
    <td><a class="del-link" href="edit.php?del_id=<?= $apart['id']; ?>">delete</a></td>
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