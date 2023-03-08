    <?php 

        include("../app/controllers/apartbd.php");

    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/general.css">
        <link rel="stylesheet" href="css/date-form.css">
        <link rel="stylesheet" href="css/header.css">
        <link rel="stylesheet" href="css/footer.css">
        <link rel="stylesheet" href="css/air-datepicker.css">
    <link rel="stylesheet" href="css/scroll-to-top.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/iconfonts.css">
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    <title>GrantAvgustov</title>
</head>
<body>
    <div class="wrapper">

        <!---------------- Шапка сайта ---------------->
        <?php include("include/header.php"); ?>
 

         <!---------------- Контент сайта ---------------->
        <main class="page">
 
            <!-- Главный экран -->
            <div class="page_main-block main-block">
                <div class="main_container _container">
                    <div class="main_block_body">
                        <h1 class="animate__animated animate__fadeInDown">Посетите уютное место для отдыха <span class="orange_text">«GrantAvgustov»</span></h1>
                        <div class="sub-title animate__animated animate__fadeIn">
                            Лучший отдых у нас!
                        </div>  
                        <div class="date-body">
                          <form class="date-form" action="booking-form.php" method="post">
                            <div class="form-date-body">
                                <div class="check-in date-block">
                                    <p class="title-date">Заезд</p>
                                    <input  class="date-input" readonly id="airdatepicker1" name ="date1" placeholder="Выберите дату">
                                </div>
            
                                <div class="date-line"></div>
                
                                <div class="check-out date-block">
                                    <p class="title-date" for="">Выезд</p>
                                    <input  class="date-input" readonly id="airdatepicker2"  name ="date2" placeholder="Выберите дату">
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
                     
                          <button type="submit" name="date-form-btn" class="date-form-btn">Найти номер</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="main_block-image _ibg">
                    <img src="img/bg.jpg" alt="background">
                </div>
            </div>

            <!-- Блок О нас -->
            <section class="about_block" id="about_block">
                <div class="about_container _container">
                    <div class="about_title title_block animate__animated wow animate__fadeInUp">О нас</div>
                   
                        <div class="about_body">
                       
                            <div class="about_text animate__animated wow animate__fadeInLeft">
                                Апарт-отель «GrantAvgustov» находится на территории Августовского канала расположенного в Польше и Гродненской области Беларуси. Данный апарт-отель создан для тех, кто хочет отдохнуть от городского шума и желает отдохнуть в красивом уголке природы, не расставаясь с привычным комфортом. В нашем отеле есть всё для вашего комфортабельного отдыха.
                                К вашим услугам: уникальные по своему дизайну и комфорту, просторные номера с видом на живописную природу, детские площадки и много другое. 
                            </div>
                            <div class="about_img">
                                <img src="img/hotel.svg" alt="hotel-img">
                            </div>
                        </div>
                </div>
            </section>

            <!-- Блок Удобства -->
            <section class="facilities_block">
                <div class="facilities_container _container">
                    <div class="facilities_title title_block">Удобства</div>
                    <div class="facilities_body">
                        <div class="facilities_item">
                            <div class="facilities_icon">
                                <img src="icons/icons-facilities/wifi.svg" alt="icon-wifi">
                            </div>
                            <div class="facilities_heading">Бесплатный Wi-Fi</div>
                        </div>
                        <div class="facilities_item">
                            <div class="facilities_icon">
                                <img src="icons/icons-facilities/park.svg" alt="icon-parking">
                            </div>
                            <div class="facilities_heading">Парковка</div>
                        </div>
                        <div class="facilities_item">
                            <div class="facilities_icon">
                                <img src="icons/icons-facilities/kettle.svg" alt="icon-kettle">
                            </div>
                            <div class="facilities_heading">Электрочайник</div>
                        </div>
                        <div class="facilities_item">
                            <div class="facilities_icon">
                                <img src="icons/icons-facilities/tv.svg" alt="icon-tv">
                            </div>
                            <div class="facilities_heading">Телевизор</div>
                        </div>
                        <div class="facilities_item">
                            <div class="facilities_icon">
                                <img src="icons/icons-facilities/fridge.svg" alt="icon-fridge">
                            </div>
                            <div class="facilities_heading">Мини-холодильник</div>
                        </div>
                        <div class="facilities_item">
                            <div class="facilities_icon">
                                <img src="icons/icons-facilities/shower.svg" alt="icon-shower">
                            </div>
                            <div class="facilities_heading">Душ</div>
                        </div>
                        <div class="facilities_item">
                            <div class="facilities_icon">
                                <img src="icons/icons-facilities/trees.svg" alt="icon-trees">
                            </div>
                            <div class="facilities_heading">Захватывающие виды</div>
                        </div>
                        <div class="facilities_item">
                            <div class="facilities_icon">
                                <img src="icons/icons-facilities/towels.svg" alt="icon-towels">
                            </div>
                            <div class="facilities_heading">Постельное белье и полотенца</div>
                        </div>
                    </div>
                </div>
              
            </section>

            <!-- Блок с номерами -->
            <section class="rooms_block">
                <div class="rooms_container _container">
                    <div class="rooms_title title_block">Наши номера</div>
                    
                    <div class="rooms-slider slider">
                    <?php foreach ($apartaments as $apart): ?>
                        <a href="<?='info-rooms.php?post=' . $apart['id']; ?>" class="slider__item">
                            <div class="slider_img">
                        
                              
                            <img src="<?=BASE_URL . 'img/slider-rooms/' . $postimages['apart1'] ?>" alt="img-room">
                        
                                  
                            </div>
                            <div class="slider_title room_content"><?= $apart['title']; ?> </div>
                            <div class="slider_text room_content"><?= $apart['description']; ?></div>
                            <div class="slider_price room_content">
                            <span class="price_content">от <?= $apart['cost']; ?> BYN</span>/сутки</div>
                        </a>
                        <?php endforeach; ?>

                      
                        
                    </div>
                </div>
           
            </section>

             <!-- Блок с галерей -->
            <section class="gallery_block">
                <div class="gallery_container _container">
                    <div class="gallery_title title_block">Фотогалерея</div>
                        <div class="gallery_body">
                            <div class="slider_gallery slider-single">
                                <div class="single_img"><img src="img/slider-gallery/avg_1.jpg" alt="avg_1"></div>
                                <div class="single_img"><img src="img/slider-gallery/avg_2.jpg" alt="avg_2"></div>
                                <div class="single_img"><img src="img/slider-gallery/avg_3.jpg" alt="avg_3"></div>
                                <div class="single_img"><img src="img/slider-gallery/avg_4.jpg" alt="avg_4"></div>
                                <div class="single_img"><img src="img/slider-gallery/avg_5.jpg" alt="avg_5"></div>
                                <div class="single_img"><img src="img/slider-gallery/avg_6.jpg" alt="avg_6"></div>
                                <div class="single_img"><img src="img/slider-gallery/avg_7.jpg" alt="avg_7"></div>
                                <div class="single_img"><img src="img/slider-gallery/avg_8.jpg" alt="avg_8"></div>
                                <div class="single_img"><img src="img/slider-gallery/avg_9.jpg" alt="avg_9"></div>
                            </div>
                            <div class="slider_gallery slider-nav">
                                <div class="nav_img"><img src="img/slider-gallery/avg_1.jpg" alt="avg_1"></div>
                                <div class="nav_img"><img src="img/slider-gallery/avg_2.jpg" alt="avg_2"></div>
                                <div class="nav_img"><img src="img/slider-gallery/avg_3.jpg" alt="avg_3"></div>
                                <div class="nav_img"><img src="img/slider-gallery/avg_4.jpg" alt="avg_4"></div>
                                <div class="nav_img"><img src="img/slider-gallery/avg_5.jpg" alt="avg_5"></div>
                                <div class="nav_img"><img src="img/slider-gallery/avg_6.jpg" alt="avg_6"></div>
                                <div class="nav_img"><img src="img/slider-gallery/avg_7.jpg" alt="avg_7"></div>
                                <div class="nav_img"><img src="img/slider-gallery/avg_8.jpg" alt="avg_8"></div>
                                <div class="nav_img"><img src="img/slider-gallery/avg_9.jpg" alt="avg_9"></div>
                            </div>
                        </div>
                </div>
            </section>
            
     

            <!-- Блок с контактами -->
            <section class="contacts_block" id="contacts_block">
                <div class="contacts_container">
                    <div class="contacts_body">
                        <div class="map_block">
                            <iframe class="google_map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d603803.4503279808!2d22.758164914905052!3d53.76087657994211!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46e05911a126c679%3A0x4c10a1b072ac8fdd!2z0JDQstCz0YPRgdGC0L7QstGB0LrQuNC5INC60LDQvS4!5e0!3m2!1sru!2sby!4v1671809215835!5m2!1sru!2sby"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <div class="contacts_info">
                            <div class="contacts_info_body">
                                <div class="contacts_info_title animate__animated wow animate__fadeInRight">
                                    Как добратся?
                                </div>
                                <div class="contacts_info_text animate__animated wow animate__fadeInUp">
                                    Добраться до апарт-отеля проще всего из Гродно, так как расстояние до Августовского канала из областного центра совсем небольшое – 35 км. Проще всего отправиться на личном авто или в составе туристической группы.
                                </div>
                                <div class="contacts_contact animate__animated wow animate__fadeInUp">
                                    <div class="contacts_communication">
                                       <span class="contact_bold">E-mail:</span> example@mail.ru
                                    </div>
                                    <div class="contacts_communication">
                                        <span class="contact_bold">Телефон:</span> +375 (29) 133-72-28  
                                     </div>
                                </div>
                                <div class="contacts_icons">
                                    <div class="contacts_icon">
                                        <a href="#"><img src="icons/icons-contacts/telegram_icon.svg" alt="telegram_icon"></a>
                                    </div>
                                    <div class="contacts_icon">
                                        <a href="#"><img src="icons/icons-contacts/viber_icon.svg" alt="viber_icon"></a>
                                    </div>
                                    <div class="contacts_icon">
                                        <a href="#"><img src="icons/icons-contacts/watsapp_icon.svg" alt="watsapp_icon"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="reviews_block">
                <div class="reviews_container _container">
                    <div class="reviews_title title_block">Отзывы</div>
                    <div class="reviews_body">

                         <div class="slider_reviews slider">
                        <div class="slider__item">
                                <div class="rating room_content" data-total-value="5">
                                    <div class="rating_item" data-item-value="5">★</div>
                                    <div class="rating_item" data-item-value="4">★</div>
                                    <div class="rating_item" data-item-value="3">★</div>
                                    <div class="rating_item" data-item-value="2">★</div>
                                    <div class="rating_item" data-item-value="1">★</div>
                                </div>
                            <div class="review_text room_content">Были в апреле, ловили воблу, всё очень понравилось, место, персонал, удобства, стояли в палатке, решили приехать сюда в конце сентября. Елена и Сергей из Нижегородской области, отдельное спасибо хозяйке Юле</div>
                            <div class="review_info room_content">
                               <p class="author_review">Никита Толмачев</p> 
                               <p class="date_review">28 сентября 2021</p> 
                            </div>
                        </div>

                        <div class="slider__item">
                            <div class="rating room_content" data-total-value="4">
                                <div class="rating_item" data-item-value="5">★</div>
                                <div class="rating_item" data-item-value="4">★</div>
                                <div class="rating_item" data-item-value="3">★</div>
                                <div class="rating_item" data-item-value="2">★</div>
                                <div class="rating_item" data-item-value="1">★</div>
                            </div>
                        <div class="review_text room_content">Были в апреле, ловили воблу, всё очень понравилось, место, персонал, удобства, стояли в палатке, решили приехать сюда в конце сентября. Елена и Сергей из Нижегородской области, отдельное спасибо хозяйке Юле Были в апреле, ловили воблу, всё очень понравилось, место, персонал, удобства, стояли в палатке, решили приехать сюда в конце сентября. Елена и Сергей из Нижегородской области, отдельное спасибо хозяйке Юле</div>
                        <div class="review_info room_content">
                           <p class="author_review">Никита Толмачев</p> 
                           <p class="date_review">28 сентября 2021</p> 
                        </div>
                    </div>

                    <div class="slider__item">
                        <div class="rating room_content" data-total-value="4">
                            <div class="rating_item" data-item-value="5">★</div>
                            <div class="rating_item" data-item-value="4">★</div>
                            <div class="rating_item" data-item-value="3">★</div>
                            <div class="rating_item" data-item-value="2">★</div>
                            <div class="rating_item" data-item-value="1">★</div>
                        </div>
                    <div class="review_text room_content">Были в апреле, ловили воблу, всё очень понравилось, место, персонал, удобства, стояли в палатке, решили приехать сюда в конце сентября. Елена и Сергей из Нижегородской области, отдельное спасибо хозяйке Юле Были в апреле, ловили воблу, всё очень понравилось, место, персонал, удобства, стояли в палатке, решили приехать сюда в конце сентября. Елена и Сергей из Нижегородской области, отдельное спасибо хозяйке Юле</div>
                    <div class="review_info room_content">
                       <p class="author_review">Никита Толмачев</p> 
                       <p class="date_review">28 сентября 2021</p> 
                    </div>
                </div>

                <div class="slider__item">
                    <div class="rating room_content" data-total-value="4">
                        <div class="rating_item" data-item-value="5">★</div>
                        <div class="rating_item" data-item-value="4">★</div>
                        <div class="rating_item" data-item-value="3">★</div>
                        <div class="rating_item" data-item-value="2">★</div>
                        <div class="rating_item" data-item-value="1">★</div>
                    </div>
                <div class="review_text room_content">Были в апреле, ловили воблу, всё очень понравилось, место, персонал, удобства, стояли в палатке, решили приехать сюда в конце сентября. Елена и Сергей из Нижегородской области, отдельное спасибо хозяйке Юле Были в апреле, ловили воблу, всё очень понравилось, место, персонал, удобства, стояли в палатке, решили приехать сюда в конце сентября. Елена и Сергей из Нижегородской области, отдельное спасибо хозяйке Юле</div>
                <div class="review_info room_content">
                   <p class="author_review">Никита Толмачев</p> 
                   <p class="date_review">28 сентября 2021</p> 
                </div>
            </div>

            <div class="slider__item">
                <div class="rating room_content" data-total-value="4">
                    <div class="rating_item" data-item-value="5">★</div>
                    <div class="rating_item" data-item-value="4">★</div>
                    <div class="rating_item" data-item-value="3">★</div>
                    <div class="rating_item" data-item-value="2">★</div>
                    <div class="rating_item" data-item-value="1">★</div>
                </div>
            <div class="review_text room_content">Были в апреле, ловили воблу, всё очень понравилось, место, персонал, удобства, стояли в палатке, решили приехать сюда в конце сентября. Елена и Сергей из Нижегородской области, отдельное спасибо хозяйке Юле Были в апреле, ловили воблу, всё очень понравилось, место, персонал, удобства, стояли в палатке, решили приехать сюда в конце сентября. Елена и Сергей из Нижегородской области, отдельное спасибо хозяйке Юле</div>
                <div class="review_info room_content">
                    <p class="author_review">Никита Толмачев</p> 
                    <p class="date_review">28 сентября 2021</p> 
                </div>
            </div>
                    </div>

                    <div class="reviews_button_content">
                    <a href="reviews.php" class="review_button"><span>Оставить отзыв</span></a>
                    </div>

                </div>
                    </div>
                </div>
            </section>
            
            <!-- Блок с формой обратной связи -->
            <section class="feedback_block">
        <div class="feedback_container _container">
            <div class="feedback_title title_block">Обратная связь</div>
            <div class="feedback_body">
                <form action="">
                    <div class="feedback_input-group">
                        <input type="text" id="name" placeholder=" " />
                        <label class="input-label" for="name">Имя</label>
                    </div>
                    <div class="feedback_input-group">
                        <input type="text" id="email" placeholder=" " />
                        <label class="input-label" for="email">Email</label>
                    </div>
                       <div class="feedback_input-group">
                        <textarea name="feedback-area" id="text-area" placeholder=" "></textarea>
                        <label class="area-label" for="text-area">Сообщение</label>
                    </div>
                    <button type="submit" class="feedback_btn">Отправить</button>
                </form>
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
    <script src="js/script.js"></script>
    <script src="js/air-datepicker.js"></script>
    <script src="js/calendar.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/script-slide.js"></script>
    <script src="js/gallery-slide.js"></script>
    <script src="js/reviews-slide.js"></script>
    <script src="js/scroll-to-top.js"></script>
    <script>new WOW().init();</script>
</body>
</html>