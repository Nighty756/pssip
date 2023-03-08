<?php include("path.php");
include("../app/database/functiondb.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/rooms.css">
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/air-datepicker.css">
    <link rel="stylesheet" href="css/iconfonts.css">
    <link rel="stylesheet" href="css/scroll-to-top.css">
    <link rel="stylesheet" href="css/date-form.css">
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>Бронирование номеров</title>
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
                    <h1>Бронирование номеров</h1>

                    <div class="date-body">
                        <form class="date-form" action="">
                          <div class="form-date-body">
                              <div class="check-in date-block">
                                  <p class="title-date" for="">Заезд</p>
                                  <input type="text" class="date-input" readonly id="airdatepicker1" placeholder="Выберите дату">
                              </div>
          
                              <div class="date-line"></div>
              
                              <div class="check-out date-block">
                                  <p class="title-date" for="">Выезд</p>
                                  <input type="text" class="date-input" readonly id="airdatepicker2" placeholder="Выберите дату">
                              </div>
                       
                          <div class="date-line"></div>
              
                              <div class="guests date-block">
                                  <p class="title-date" for="">Гости</p>
                                  <select name="" id="">
                                      <option value="">1</option>
                                      <option value="">2</option>
                                      <option value="">3</option>
                                  </select>
                              </div>
                          </div>
                          <button type="submit" class="date-form-btn">Найти номер</button>
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

                    <div class="rooms_card">
                        <div class="rooms_item">
                            <div class="rooms_item_body">
                                
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                       <div class="swiper-slide"><img src="img/slider-rooms/apart1.jpg" alt=""></div>
                                       <div class="swiper-slide"><img src="img/slider-rooms/hallway1.jpg" alt=""></div>
                                       <div class="swiper-slide"><img src="img/slider-rooms/bathroom1.jpg" alt=""></div>
                                       <div class="swiper-slide"><img src="img/slider-rooms/balcony1.jpg" alt=""></div>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                  </div>
                           
                   

                                <div class="rooms_info">
                                    <div class="rooms_info_body">
                                        <div class="rooms_info_title">Стандартный номер</div>
                                        <div class="rooms_info_text">Уютный однокомнатный номер с большой кроватью и видом на природу Уютный однокомнатный номер с большой кроватью и видом на природу</div>
                                        <div class="rooms_info_icons">
                                            <div class="rooms_icon_item">
                                                <div class="rooms_icon"><img src="icons/icons-rooms/peoples.svg" alt=""></div>
                                                <div class="rooms_icon_text">до 2 мест</div>
                                            </div>
                                            <div class="rooms_icon_item">
                                                <div class="rooms_icon"><img src="icons/icons-rooms/area.svg" alt=""></div>
                                                <div class="rooms_icon_text">Площадь 20 м<sup>2</sup></div>
                                            </div>
                                            <div class="rooms_icon_item">
                                            <div class="rooms_icon"> <img src="icons/icons-rooms/bed.svg" alt=""></div>
                                            <div class="rooms_icon_text">x 1</div>
                                            </div>
                                        </div>
                                        <div class="rooms_info_price">Стоимость номера от <span class="bold_price">184,00 BYN / сутки</span></div>
                                        <div class="rooms_info_btn">
                                            <a class="booking-btn room-btn" href="booking-form.php">Забронировать</a>
                                            <a class="more-btn room-btn" href="info-rooms.php">Подробнее</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="rooms_card">
                        <div class="rooms_item">
                            <div class="rooms_item_body">
                                
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                       <div class="swiper-slide"><img src="img/slider-rooms/apart1.jpg" alt=""></div>
                                       <div class="swiper-slide"><img src="img/slider-rooms/hallway1.jpg" alt=""></div>
                                       <div class="swiper-slide"><img src="img/slider-rooms/bathroom1.jpg" alt=""></div>
                                       <div class="swiper-slide"><img src="img/slider-rooms/balcony1.jpg" alt=""></div>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                  </div>
                           
                   

                                <div class="rooms_info">
                                    <div class="rooms_info_body">
                                        <div class="rooms_info_title">Стандартный номер</div>
                                        <div class="rooms_info_text">Уютный однокомнатный номер с большой кроватью и видом на природу Уютный однокомнатный номер с большой кроватью и видом на природу</div>
                                        <div class="rooms_info_icons">
                                            <div class="rooms_icon_item">
                                                <div class="rooms_icon"><img src="icons/icons-rooms/peoples.svg" alt=""></div>
                                                <div class="rooms_icon_text">до 2 мест</div>
                                            </div>
                                            <div class="rooms_icon_item">
                                                <div class="rooms_icon"><img src="icons/icons-rooms/area.svg" alt=""></div>
                                                <div class="rooms_icon_text">Площадь 20 м<sup>2</sup></div>
                                            </div>
                                            <div class="rooms_icon_item">
                                            <div class="rooms_icon"> <img src="icons/icons-rooms/bed.svg" alt=""></div>
                                            <div class="rooms_icon_text">x 1</div>
                                            </div>
                                        </div>
                                        <div class="rooms_info_price">Стоимость номера от <span class="bold_price">184,00 BYN / сутки</span></div>
                                        <div class="rooms_info_btn">
                                            <a class="booking-btn room-btn" href="">Забронировать</a>
                                            <a class="more-btn room-btn" href="info-rooms.php">Подробнее</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="rooms_card">
                        <div class="rooms_item">
                            <div class="rooms_item_body">
                                
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                       <div class="swiper-slide"><img src="img/slider-rooms/apart1.jpg" alt=""></div>
                                       <div class="swiper-slide"><img src="img/slider-rooms/hallway1.jpg" alt=""></div>
                                       <div class="swiper-slide"><img src="img/slider-rooms/bathroom1.jpg" alt=""></div>
                                       <div class="swiper-slide"><img src="img/slider-rooms/balcony1.jpg" alt=""></div>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                  </div>
                           
                   

                                <div class="rooms_info">
                                    <div class="rooms_info_body">
                                        <div class="rooms_info_title">Стандартный номер</div>
                                        <div class="rooms_info_text">Уютный однокомнатный номер с большой кроватью и видом на природу Уютный однокомнатный номер с большой кроватью и видом на природу</div>
                                        <div class="rooms_info_icons">
                                            <div class="rooms_icon_item">
                                                <div class="rooms_icon"><img src="icons/icons-rooms/peoples.svg" alt=""></div>
                                                <div class="rooms_icon_text">до 2 мест</div>
                                            </div>
                                            <div class="rooms_icon_item">
                                                <div class="rooms_icon"><img src="icons/icons-rooms/area.svg" alt=""></div>
                                                <div class="rooms_icon_text">Площадь 20 м<sup>2</sup></div>
                                            </div>
                                            <div class="rooms_icon_item">
                                            <div class="rooms_icon"> <img src="icons/icons-rooms/bed.svg" alt=""></div>
                                            <div class="rooms_icon_text">x 1</div>
                                            </div>
                                        </div>
                                        <div class="rooms_info_price">Стоимость номера от <span class="bold_price">184,00 BYN / сутки</span></div>
                                        <div class="rooms_info_btn">
                                            <a class="booking-btn room-btn" href="">Забронировать</a>
                                            <a class="more-btn room-btn" href="info-rooms.php">Подробнее</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="rooms_card">
                        <div class="rooms_item">
                            <div class="rooms_item_body">
                                
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                       <div class="swiper-slide"><img src="img/slider-rooms/apart1.jpg" alt=""></div>
                                       <div class="swiper-slide"><img src="img/slider-rooms/hallway1.jpg" alt=""></div>
                                       <div class="swiper-slide"><img src="img/slider-rooms/bathroom1.jpg" alt=""></div>
                                       <div class="swiper-slide"><img src="img/slider-rooms/balcony1.jpg" alt=""></div>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                  </div>
                           
                   

                                <div class="rooms_info">
                                    <div class="rooms_info_body">
                                        <div class="rooms_info_title">Стандартный номер</div>
                                        <div class="rooms_info_text">Уютный однокомнатный номер с большой кроватью и видом на природу Уютный однокомнатный номер с большой кроватью и видом на природу</div>
                                        <div class="rooms_info_icons">
                                            <div class="rooms_icon_item">
                                                <div class="rooms_icon"><img src="icons/icons-rooms/peoples.svg" alt=""></div>
                                                <div class="rooms_icon_text">до 2 мест</div>
                                            </div>
                                            <div class="rooms_icon_item">
                                                <div class="rooms_icon"><img src="icons/icons-rooms/area.svg" alt=""></div>
                                                <div class="rooms_icon_text">Площадь 20 м<sup>2</sup></div>
                                            </div>
                                            <div class="rooms_icon_item">
                                            <div class="rooms_icon"> <img src="icons/icons-rooms/bed.svg" alt=""></div>
                                            <div class="rooms_icon_text">x 1</div>
                                            </div>
                                        </div>
                                        <div class="rooms_info_price">Стоимость номера от <span class="bold_price">184,00 BYN / сутки</span></div>
                                        <div class="rooms_info_btn">
                                            <a class="booking-btn room-btn" href="">Забронировать</a>
                                            <a class="more-btn room-btn" href="info-rooms.php">Подробнее</a>
                                        </div>
                                    </div>
                                </div>
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
       <!---------------- Кнопка наверх--------------->
       <button class="scroll-to-top"><i class="_icon-arrow-up"></i></button>
       <!---------------- Подключение скриптов---------------->
       <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
       <script src="js/swiper-rooms.js"></script>

       <script src="js/script.js"></script>
       <script src="js/air-datepicker.js"></script>
       <script src="js/calendar.js"></script>
       <script src="js/scroll-to-top.js"></script>
</body>
</html>