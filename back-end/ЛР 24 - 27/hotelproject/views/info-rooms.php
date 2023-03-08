<?php session_start();
include("path.php"); 

include("../app/controllers/apartbd.php");
$post = selectOne('apartments', ['id' => $_GET['post']]);
$postimages = selectAll('apartslider', ['id_category' => $_GET['post']]);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/iconfonts.css">
    <link rel="stylesheet" href="css/info-rooms.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
<body>
    <div class="wrapper">
<!---------------- Шапка сайта ---------------->
    <?php include("include/header.php"); ?>

        <main class="page">
       
            <!-- Верхний контент -->
            <div class="head_reviews">
                <div class="head_reviews_container _container">
                    <div class="head_reviews_content">
                        <h1>Информация о номере</h1>
                    </div>
                </div>
                <div class="main_block-image _ibg">
                    <img src="img/rooms-bg.jpg" alt="background">
                </div>
            </div>    
        
            <section class="info_room">
                <div class="info_room_container _container">
                    <h2><?= $post['title']; ?></h2>
                    <div class="info_rooms_body">
                
                        <div class="gallery_body">
                            <div class="slider_gallery slider-single">
                            <?php foreach ($postimages as $key => $postimg): ?>
                                <div class="single_img"><img src="<?=BASE_URL . 'img/slider-rooms/' . $postimg['apart1'] ?>" alt="<?= $postimg['apart1'] ?>"></div>
                                <?php endforeach; ?>
                            </div>
                            <div class="slider_gallery slider-nav">
                            <?php foreach ($postimages as $key => $postimg): ?>
                                <div class="nav_img"><img src="<?=BASE_URL . 'img/slider-rooms/' . $postimg['apart1'] ?>" alt="<?= $postimg['apart1'] ?>"></div>
                                <?php endforeach; ?>
                            </div>
                        </div>

                        <div class="info_rooms_content">
                            <div class="info_rooms_row">

                                <div class="rooms_info_icons">
                                    <div class="rooms_icon_item">
                                        <div class="rooms_icon"><img src="icons/icons-rooms/peoples.svg" alt=""></div>
                                        <div class="rooms_icon_text">до <?= $post['guests']; ?> гостей</div>
                                    </div>
                                    <div class="rooms_icon_item">
                                        <div class="rooms_icon"><img src="icons/icons-rooms/area.svg" alt=""></div>
                                        <div class="rooms_icon_text">Площадь <?= $post['square']; ?> м<sup>2</sup></div>
                                    </div>
                                    <div class="rooms_icon_item">
                                    <div class="rooms_icon"> <img src="icons/icons-rooms/bed.svg" alt=""></div>
                                    <div class="rooms_icon_text">x <?= $post['bed']; ?></div>
                                    </div>
                                </div>

                       
                                <div class="rooms_info_price">Стоимость за <span class="bold_price">12 ночей - <?= $post['cost']; ?> BYN</span></div>
                                <a class="booking-btn room-btn" href="<?='booking-form.php?post=' . $post['id']; ?>">Забронировать</a>
                       
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="description_room">
                        <div class="info_room_container _container">
                        <div class="description_room_body">
                            <div class="title_description_room title_info_room">Описание</div>
                            <div class="description_text_room">
                            <?= $post['description']; ?>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="equipment_room">
                        <div class="info_room_container _container">
                        <div class="equipment_room_body">
                            <div class="title_equipment_room title_info_room">Оснащение номера</div>
                            <div class="equipment_room_info"><?= $post['equipment']; ?></div>
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
 <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
 <script src="js/slider-rooms-info.js"></script>
 <script src="js/slick.min.js"></script>
</body>
</html>