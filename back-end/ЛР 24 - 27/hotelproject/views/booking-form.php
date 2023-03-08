<?php include("path.php"); 
  include("../app/controllers/apartbd.php");


$post = selectOne('apartments', ['id' => $_GET['post']]);

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['date-form-btn'])){
    $date1 = $_POST['date1'];
    $date2 = $_POST['date2'];
    $_SESSION['dt1'] = $date1;
    $_SESSION['dt2'] = $date2;
    header('location: ' . BASE_URL . 'rooms.php');
}

$dateDiff = date_diff(new DateTime($_SESSION['dt1']), new DateTime($_SESSION['dt2']))->days;


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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/imask/3.4.0/imask.min.js"></script>
    <link rel="stylesheet" href="css/date-form.css">
    <link rel="stylesheet" href="css/booking-form.css">
</head>
<body>
    <div class="wrapper">
        <!---------------- Шапка сайта ---------------->
        <?php include("include/header.php"); ?>

    <!---------------- Контент сайта ---------------->
    <main class="page">
   
        <section class="info_booking_room">
            <div class="info_booking_body">
               
                <div class="date-body">
                    <div class="info_booking_title">Информация о бронировании</div>
                    <form class="date-form">
                      <div class="form-date-body">
                          <div class="check-in date-block">
                              <p class="title-date">Заезд</p>
                              <input type="text" class="date-input" readonly id="bookdatepicker1" value="<?= $_SESSION['dt1'] ?>">
                          </div>
      
                          <div class="date-line"></div>
          
                          <div class="check-out date-block">
                              <p class="title-date" for="">Выезд</p>
                              <input type="text" class="date-input" readonly id="bookdatepicker2" value="<?= $_SESSION['dt2'] ?>">
                          </div>
                   
                      <div class="date-line"></div>
          
                          <div class="guests date-block">
                              <p class="title-date">Гости</p>
                              <select name="select_guests">
                                  <option value=""><?= $post['guests']; ?></option>
                              </select>
                          </div>
                      </div>
                      </form>
                  </div>
                  <div class="list-group">
                  <div class="list-group-item list-header" data-name="spoiler-title">
                    Детали бронирования
                </div>
                <div class="list-group-item list-content spoiler-body">
                    <div class="select_room_info">
                        <div class="select_room"><?= $post['title']; ?></div>
                        <div class="select_room_price"><?= $post['cost']; ?> BYN</div>
                      </div>

                      <div class="select_room_info">
                        <div class="select_room">ночей</div>
                        <div class="select_room_price"><?= $dateDiff; ?></div>
                      </div>
                      <div class="select_room_info">
                    <div class="select_room">Общая стоимость</div>
                    <div class="select_room_price"><?= $dateDiff * $post['cost'] ?> BYN</div>
                  </div>
                </div>
                </div>
                <div class="select_room_row">
                <div class="select_room_title">Выбранный номер</div>
                <div class="select_room_block">
                <div class="select_room_info">
                  <div class="select_room"><?= $post['title']; ?></div>
                  <div class="select_room_price"><?= $post['cost']; ?> BYN</div>
                </div>
   
                  <div class="select_room_info">
                    <div class="select_room">ночей</div>
                    <div class="select_room_price"><?= $dateDiff; ?></div>
                  </div>
                  <div class="select_room_info">
                    <div class="select_room">Общая стоимость</div>
                    <div class="select_room_price"><?= $totalprice = $dateDiff * $post['cost'] ?> BYN</div>
                  </div>
            </div>
            </div>
        </div>
    </section>

    <section class="booking_form_block">
        <div class="booking_form_container _container">
            <div class="booking_form_row">



                <div class="head_booking_form">
                    <h1>Бронирование номера</h1>
                    <div class="back_to_rooms"><a href="rooms.php"><span>к номерам</span></a></div>
                </div>

                <div class="booking_form">
                   
                    <div class="booking_form_body">

                    <form action="../app/voucher/voucher.php" method="post">
                        <div class="booking_form_title">Контактные данные</div>
               <div class="data_block">
               <?php if (isset($_SESSION['id'])): ?>
                <div class="data_block_body">
                        <div class="booking_item">
                        <div class="booking_input-group">
                            <input type="text" id="name" name="name" value="<?php echo $_SESSION['name']; ?>" placeholder=" " required>
                            <label class="input-label" for="name">Имя</label>
                            <?= $err['name'] ?>
                        </div>
                    </div>
                    <div class="booking_item">
                        <div class="booking_input-group">
                            <input type="text" id="surname" name="surname" value="<?php echo $_SESSION['surname']; ?>" placeholder=" " required>
                            <label class="input-label"  for="surname">Фамилия</label>
                            <?= $err['surname'] ?>
                        </div>
                    </div>
                    <div class="booking_item">
                        <div class="booking_input-group">
                            <input type="text" id="patronymic" name="patronymic" value="<?php echo $_SESSION['patronymic']; ?>" placeholder=" " required>
                            <label class="input-label"  for="patronymic">Отчество</label>
                            <?= $err['patronymic'] ?>
                        </div>
                    </div>
                    <div class="booking_item ">
                        <div class="booking_input-group">
                            <input type="text" id="email" name="email" value="<?php echo $_SESSION['email']; ?>" placeholder=" " required>
                            <label class="input-label" for="email">Email</label>
                            <?= $err['email'] ?>
                        </div>
                    </div>
                    <div class="booking_item tel-block">
                        <div class="booking_input-group">
                            <input type="tel" id="telephone" name="telephone" placeholder=" " required>
                            <label class="input-label" for="telephone">Телефон</label>
                            <?= $err['telephone'] ?>
                        </div>
                    </div>
                     <input type="hidden" name="id" name="title" value="<?= $post['id']; ?>">
                    <input type="hidden" name="title" value="<?= $post['title']; ?>">
                    <input type="hidden" name="cost" value="<?= $post['cost']; ?>">
                    <input type="hidden" name="guests" value="<?= $post['guests']; ?>">
                    <input type="hidden" name="dt1" value="<?= $_SESSION['dt1']; ?>">
                    <input type="hidden" name="dt2" value="<?= $_SESSION['dt2']; ?>">
                    <input type="hidden" name="totalprice" value="<?= $totalprice; ?>">
                    <input type="hidden" name="datediff" value="<?= $dateDiff; ?>">
                </div>
                <?php else: ?>
                    <div class="data_block_body">
                        <div class="booking_item">
                        <div class="booking_input-group">
                     
                            <input type="text" name="name" id="name" placeholder=" " required>
                          
                            <label class="input-label" for="name">Имя</label>
                        </div>
                    </div>
                    <div class="booking_item">
                        <div class="booking_input-group">
                            <input type="text" name="surname"  id="surname" placeholder=" " required>
                            <label class="input-label"  for="surname">Фамилия</label>
                        </div>
                    </div>
                    <div class="booking_item">
                        <div class="booking_input-group">
                            <input type="text" name="patronymic" id="patronymic" placeholder=" " required>
                            <label class="input-label"  for="patronymic">Отчество</label>
                        </div>
                    </div>
                    <div class="booking_item">
                        <div class="booking_input-group">
                            <input type="text" name="email" id="email" placeholder=" " required>
                            <label class="input-label" for="email">Email</label>
                        </div>
                    </div>
                    <div class="booking_item">
                        <div class="booking_input-group">
                            <input type="tel" name="telephone" id="telephone" placeholder=" " required>
                            <label class="input-label" for="telephone">Телефон</label>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="id" name="title" value="<?= $post['id']; ?>">
                    <input type="hidden" name="title" value="<?= $post['title']; ?>">
                    <input type="hidden" name="cost" value="<?= $post['cost']; ?>">
                    <input type="hidden" name="guests" value="<?= $post['guests']; ?>">
                    <input type="hidden" name="dt1" value="<?= $_SESSION['dt1']; ?>">
                    <input type="hidden" name="dt2" value="<?= $_SESSION['dt1']; ?>">
                    <input type="hidden" name="totalprice" value="<?= $totalprice; ?>">
                    <input type="hidden" name="datediff" value="<?= $dateDiff; ?>">
                <?php endif; ?>
                </div>

<!-- Информация о гостях -->


<?php $gst = (int) $post['guests'];?>
<?php if($gst >= 1):?>



    <div class="booking_form_title">Информация о гостях</div>
    <?php for($i = 1; $i <= $gst; $i++):?>
        <div class="booking_form_title">Гость  <?= ++$j?></div>
<div class="data_block">
<div class="data_block_body">
        <div class="booking_item">
        <div class="booking_input-group">
     
            <input type="text" name="guestname[]" id="guestname" placeholder=" " required>
          
            <label class="input-label" for="guestname">Имя</label>
        </div>
    </div>
    <div class="booking_item">
        <div class="booking_input-group">
            <input type="text" id="guestsurname"name="guestsurname[]" placeholder=" " required>
            <label class="input-label" for="guestsurname">Фамилия</label>
        </div>
    </div>
    <div class="booking_item">
        <div class="booking_input-group">
            <input type="text" id="guestpatronymic" name="guestpatronymic[]"  placeholder=" " required>
            <label class="input-label"  for="guestpatronymic">Отчество</label>
        </div>
    </div>
</div>
</div>
<?php endfor;?>
<?php endif;?>
</div>   
</div>


  
<button type="submit" name="book-btn" class="book-btn">Забронировать</button> 
                    </form>
                </div>
                </div>


              

            </div>
        </div>
    </section>
    </main>
                <!---------------- Подвал сайта ---------------->
                <?php include("include/footer.php"); ?>
                </div>

                 <!---------------- Подключение скриптов---------------->
                 <script src="js/air-datepicker.js"></script>
    <script src="js/calendar.js"></script>
       <script src="js/script.js"></script>
       <script src="js/script-spoiler.js"></script>
       <script src="js/pay-form.js"></script>
</body>
</html>