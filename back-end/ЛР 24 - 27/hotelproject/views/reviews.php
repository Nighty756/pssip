<?php include("path.php"); 
include("../app/database/functiondb.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/scroll-to-top.css">
    <link rel="stylesheet" href="css/reviews.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/iconfonts.css">
    <title>Отзывы</title>
</head>
<body>
    <div class="wrapper">
     <!---------------- Шапка сайта ---------------->
    <?php include("include/header.php"); ?>


         <!---------------- Контент сайта ---------------->
         <main class="page">

            <!-- Верхний контент -->
            <div class="head_reviews">
                <div class="head_reviews_container _container">
                    <div class="head_reviews_content">
                        <h1>Отзывы</h1>
                        <div class="subtitle_head_reviews">
                            В этом разделе собраны отзывы тех, кто побывал в нашем отеле
                        </div>
                    </div>
                </div>
                <div class="main_block-image _ibg">
                    <img src="img/reviews-bg.jpg" alt="background">
                </div>
            </div>
          
            <!---------------- Блок с формой отзыва ---------------->
            <section class="form_review">
                <div class="form_review_container _container">
                    <div class="form_review_body">
                        <div class="form_review_title">Вы можете поделится отзывом о проживании в нашем отеле</div>
                        <a href="#popup" class="review_button popup_link"><span>Оставить отзыв</span></a>
                    </div>
                </div>
            </section>

            <section class="content_reviews">
                <div class="reviews_conteiner _container">
                    <div class="items_reviews_body">

                        <div class="item_review">
                            <div class="item_review_content">
                                <div class="rating" data-total-value="5">
                                    <div class="rating_item" data-item-value="5">★</div>
                                    <div class="rating_item" data-item-value="4">★</div>
                                    <div class="rating_item" data-item-value="3">★</div>
                                    <div class="rating_item" data-item-value="2">★</div>
                                    <div class="rating_item" data-item-value="1">★</div>
                                </div>
                                <div class="review_text">Были в апреле, ловили воблу, всё очень понравилось, место, персонал, удобства, стояли в палатке, решили приехать сюда в конце сентября. Елена и Сергей...</div>
                                <div class="review_info">
                                    <p class="author_review">Никита Толмачев</p> 
                                    <p class="date_review">28 сентября 2021</p> 
                                 </div>
                            </div>
                        </div>

                        <div class="item_review">
                            <div class="item_review_content">
                                <div class="rating" data-total-value="5">
                                    <div class="rating_item" data-item-value="5">★</div>
                                    <div class="rating_item" data-item-value="4">★</div>
                                    <div class="rating_item" data-item-value="3">★</div>
                                    <div class="rating_item" data-item-value="2">★</div>
                                    <div class="rating_item" data-item-value="1">★</div>
                                </div>
                                <div class="review_text">Были в апреле, ловили воблу, всё очень понравилось, место, персонал, удобства, стояли в палатке, решили приехать сюда в конце сентября. Елена и Сергей...</div>
                                <div class="review_info">
                                    <p class="author_review">Никита Толмачев</p> 
                                    <p class="date_review">28 сентября 2021</p> 
                                 </div>
                            </div>
                        </div>

                        <div class="item_review">
                            <div class="item_review_content">
                                <div class="rating" data-total-value="5">
                                    <div class="rating_item" data-item-value="5">★</div>
                                    <div class="rating_item" data-item-value="4">★</div>
                                    <div class="rating_item" data-item-value="3">★</div>
                                    <div class="rating_item" data-item-value="2">★</div>
                                    <div class="rating_item" data-item-value="1">★</div>
                                </div>
                                <div class="review_text">Были в апреле, ловили воблу, всё очень понравилось, место, персонал, удобства, стояли в палатке, решили приехать сюда в конце сентября. Елена и Сергей...</div>
                                <div class="review_info">
                                    <p class="author_review">Никита Толмачев</p> 
                                    <p class="date_review">28 сентября 2021</p> 
                                 </div>
                            </div>
                        </div>

                        <div class="item_review">
                            <div class="item_review_content">
                                <div class="rating" data-total-value="5">
                                    <div class="rating_item" data-item-value="5">★</div>
                                    <div class="rating_item" data-item-value="4">★</div>
                                    <div class="rating_item" data-item-value="3">★</div>
                                    <div class="rating_item" data-item-value="2">★</div>
                                    <div class="rating_item" data-item-value="1">★</div>
                                </div>
                                <div class="review_text">Были в апреле, ловили воблу, всё очень понравилось, место, персонал, удобства, стояли в палатке, решили приехать сюда в конце сентября. Елена и Сергей...</div>
                                <div class="review_info">
                                    <p class="author_review">Никита Толмачев</p> 
                                    <p class="date_review">28 сентября 2021</p> 
                                 </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            
        </main>

          <!---------------- Подвал сайта ---------------->
          <?php include("include/footer.php"); ?>
  </div>


        <div id="popup" class="popup">
            <div class="popup_body">
                <div class="popup_content">
                    <div class="popup_head">
                    <a href="#" class="popup_close close-popup">X</a>
                    <div class="popup_title"><span>Написать отзыв</span></div>
                    </div>
                    <div class="popup_form">
                        <form action="#">
                            <div class="reviews_input-group">
                                <input type="text" id="name" placeholder=" " />
                                <label class="input-label" for="name">Имя</label>
                            </div>
                            <div class="reviews_input-group">
                                <input type="text" id="email" placeholder=" " />
                                <label class="input-label" for="email">Email</label>
                            </div>
                            <div class="rating rating_form" data-total-value="0">
                                <div class="rating_item item-pointer" data-item-value="5">★</div>
                                <div class="rating_item item-pointer" data-item-value="4">★</div>
                                <div class="rating_item item-pointer" data-item-value="3">★</div>
                                <div class="rating_item item-pointer" data-item-value="2">★</div>
                                <div class="rating_item item-pointer" data-item-value="1">★</div>
                            </div>
                               <div class="reviews_input-group">
                                <textarea name="reviews-area" id="text-area" placeholder=" "></textarea>
                                <label class="area-label" for="text-area">Сообщение</label>
                            </div>
                            <div class="reviews_button_content">
                            <button type="submit" class="review_button review_button_form">Отправить</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!---------------- Кнопка наверх--------------->
    <button class="scroll-to-top"><i class="_icon-arrow-up"></i></button>
       <!---------------- Подключение скриптов---------------->
       <script src="js/script.js"></script>
       <script src="js/popup.js"></script>
       <script src="js/star-rating.js"></script>
       <script src="js/scroll-to-top.js"></script>
</body>
</html>