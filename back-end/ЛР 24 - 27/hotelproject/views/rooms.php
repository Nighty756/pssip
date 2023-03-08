<?php 
include("path.php");
include("../app/controllers/apartbd.php");

$postimages = selectAll('apartslider');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['search-text'])){

        $apartments = searchRooms($_POST['search-text'], 'apartments');
} else {
        $apartments = selectAll('apartments');
}

$page = isset($_GET['page']) ? $_GET['page'] : 1;
$limit = 2;
$offset = $limit * ($page - 1);
$totalpages = round(countRow('apartments') / $limit, 0);

$apartlimit = selectRoomsLimit('apartments', $limit, $offset);

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
    <link rel="stylesheet" href="css/rooms.css">
    <link rel="stylesheet" href="css/iconfonts.css">
    <link rel="stylesheet" href="css/scroll-to-top.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>Апартаменты</title>
</head>
<body>
    <div class="wrapper">
<!---------------- Шапка сайта ---------------->
<?php include("include/header.php"); ?>

        <main class="page">

            <!-- Верхний контент -->
            <div class="head_reviews">
                <div class="head_reviews_container _container">
                    <div class="head_reviews_content">
                        <h1>Апартаменты и цены</h1>
                    
                    <div class="block_search">
                        <form action="rooms.php" class="search_form" method="post">
                            <input type="search" name="search-text" placeholder="Поиск...">
                        </form>
                    </div>
                </div>
                </div>
                <div class="main_block-image _ibg">
                    <img src="img/rooms-bg.jpg" alt="background">
                </div>
            </div>

            <!-- Категории номеров -->
            <section class="rooms_block">
                <div class="rooms_container _container">
                    <div class="rooms_body">
                    <?php foreach ($apartments as $key => $apart): ?>
                   
                        <div class="rooms_card">
                        <div class="rooms_item">
                            <div class="rooms_item_body">
                                
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                    <?php foreach ($postimages as $key => $pim): ?>
                                    <?php if ($apart['id'] === $pim['id_category']): ?>
                                       <div class="swiper-slide"><img src="<?=BASE_URL . 'img/slider-rooms/' . $pim['apart1'] ?>" alt="<?=$pim['apart1']?>"></div>
                                       <?php endif; ?>
                                       <?php endforeach; ?>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                  </div>
                           
                   

                                <div class="rooms_info">
                                    <div class="rooms_info_body">
                                 
                                        <div class="rooms_info_title"><?= $apart['title']; ?></div>
                                        <div class="rooms_info_text"><?= $apart['description']; ?></div>
                                        <div class="rooms_info_icons">
                                            <div class="rooms_icon_item">
                                                <div class="rooms_icon"><img src="icons/icons-rooms/peoples.svg" alt=""></div>
                                                <div class="rooms_icon_text">до <?= $apart['guests']; ?> мест</div>
                                            </div>
                                            <div class="rooms_icon_item">
                                                <div class="rooms_icon"><img src="icons/icons-rooms/area.svg" alt=""></div>
                                                <div class="rooms_icon_text">Площадь <?= $apart['square']; ?> м<sup>2</sup></div>
                                            </div>
                                            <div class="rooms_icon_item">
                                            <div class="rooms_icon"> <img src="icons/icons-rooms/bed.svg" alt=""></div>
                                            <div class="rooms_icon_text">x <?= $apart['bed']; ?></div>
                                            </div>
                                        </div>
                                        <div class="rooms_info_price">Стоимость номера от <span class="bold_price"><?= $apart['cost']; ?> BYN / сутки</span></div>
                                        <div class="rooms_info_btn">
                                            <a class="booking-btn room-btn" href="<?='booking-form.php?post=' . $apart['id']; ?>">Забронировать</a>
                                            <a class="more-btn room-btn" href="<?='info-rooms.php?post=' . $apart['id']; ?>">Подробнее</a>
                                        </div>
                                   
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                    
                
               

                    </div>
                </div>
            </section>

        </main> 

          <!---------------- Подвал сайта ---------------->
          <?php include("include/footer.php"); ?>
    </div>

     <!---------------- Кнопка наверх--------------->
     <button class="scroll-to-top"><i class="_icon-arrow-up"></i></button>
       <!---------------- Подключение скриптов---------------->
        <!-- Swiper JS -->
        <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
        <script src="js/swiper-rooms.js"></script>
   
       <script src="js/script.js"></script> 
       <script src="js/scroll-to-top.js"></script>

</body>
</html>