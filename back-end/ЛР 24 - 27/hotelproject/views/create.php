<?php session_start();
      include("path.php");  
      include("../app/controllers/apartbd.php")
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
        <h1 class="aparts_title title_block">Добавление апартаментов</h1>
       
        <div class="aparts_body">
         
                <div class="apparts_btn">
                    <a href="<?php echo BASE_URL . "create.php"?>" class="add-btn" type="button">Добавить</a>
                    <a href="<?php echo BASE_URL . "apartments.php"?>" class="edit-btn" type="button">Редактировать</a>
                </div>
            <form method="post" action="create.php" enctype="multipart/form-data">
            <?= $errMsg ?>

                    <div class="aparts_input-group">
                        <label class="input-label" for="name">Название</label>
                        <input type="text" value="<?= $title ?>" id="name" name="title"> 
                        <?= $err['title'] ?>
                    </div>
                   
                    
                    <div class="aparts_input-group">
                        <label class="input-label" for="text">Стоиомсть в сутки</label>
                        <input type="text" value="<?= $cost ?>" id="name" name="cost">
                        <?= $err['cost'] ?>
                    </div>
                    

                    <div class="aparts_input-group">
                        <label class="area-label" for="text-area">Описание</label>
                        <textarea name="description" id="text-area"><?= $description ?></textarea>
                        <?= $err['description'] ?>
                    </div>
                    

                    <div class="aparts_input-group">
                        <label class="area-label" for="text-area">Оснащение</label>
                        <textarea name="equipment" id="text-area"><?= $equipment ?></textarea>
                        <?= $err['equipment'] ?>
                    </div>
                    

                    <div class="aparts_input-group">
                    <p class="select-label">Количество гостей</p>
                        <select name="guests"  id="">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>

                    <div class="aparts_input-group">
                    <p class="select-label">Количество спальных мест</p>
                        <select name="bed"  id="">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </div>

                    <div class="aparts_input-group">
                        <label class="input-label" for="text">Площадь</label>
                        <input type="text" value="<?= $square ?>"  name="square">
                        <?= $err['square'] ?>
                    </div>

                    <div class="aparts_img-file">
                        <p class="select-label">Изображение</p>
                    <label class="input-file">
	   	                <span class="input-file-text" type="text"></span>
	   	                <input type="file" name="img[]" multiple>        
 	   	                <span class="input-file-btn">Выбрать изображение</span>
 	                </label>
                     <?= $errFile ?>
                    </div>

                    <button type="submit" name="apart-create" class="aparts_btn">Добавить категорию</button>
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