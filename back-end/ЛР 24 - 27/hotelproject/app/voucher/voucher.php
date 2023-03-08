<?php

include ("C:/OSPanel/domains/hotelproject/app/database/connectdb.php");
include("C:/OSPanel/domains/hotelproject/app/database/functiondb.php");

require_once 'vendor/autoload.php';


$document = new \PhpOffice\PhpWord\TemplateProcessor('./voucher.docx');

$uploadDir =  __DIR__;
$outputFile = 'voucherbooking.docx';


if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['book-btn'])){
$id = $_POST['id'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$patronymic = $_POST['patronymic'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];

$title = $_POST['title'];
$cost = $_POST['cost'];
$guests = $_POST['guests'];
$dt1 = $_POST['dt1'];
$dt2 = $_POST['dt2'];
$totalprice = $_POST['totalprice'];
$datediff = $_POST['datediff'];

$guestname = $_POST['guestname'];
$gstname = implode(" | ", $guestname);
$guestsurname = $_POST['guestsurname'];
$gstsurname = implode(" | ", $guestsurname);
$guestpatronymic = $_POST['guestpatronymic'];
$gstpatronymic = implode(" | ", $guestpatronymic);




$dateconv = date("Y.m.d", strtotime($dt1));
$dateconv2 = date("Y.m.d", strtotime($dt2));


$document->setValue('name', $name);
$document->setValue('surname', $surname);
$document->setValue('patronymic', $patronymic);
$document->setValue('email', $email);
$document->setValue('telephone', $telephone);

$document->setValue('title', $title);
$document->setValue('cost', $cost);
$document->setValue('guests', $guests);
$document->setValue('dt1', $dt1);
$document->setValue('dt2', $dt2);
$document->setValue('totalprice', $totalprice);
$document->setValue('datediff', $datediff);

$document->setValue('gstname', $gstname);
$document->setValue('gstsurname', $gstsurname);
$document->setValue('gstpatronymic', $gstpatronymic);

$client = [
    'surname' => $surname,
    'name' => $name,
    'patronymic' => $patronymic,
    'email' => $email,
    'telephone' => $telephone,
 ];

 $clientins = insert('client', $client);


 $idclient = selectOne('client', ['id' =>  $clientins]);

$vouch = [
    'id_category' => $id,
    'id_client' => $idclient['id'],
    'arrival_date' => $dateconv,
    'date_departure' => $dateconv2,
    'guests' => $guests,
    'total_cost' => $totalprice
 ];



 $vouchins = insert('voucher', $vouch);

 $idvouch = selectOne('voucher', ['id' =>  $vouchins]);
 $document->setValue('id',  $idvouch['id']);
 $document->setValue('booking_date',  $idvouch['booking_date']);
 $document->saveAs($outputFile);

}
// Имя скачиваемого файла
$downloadFile = $outputFile;

// Контент-тип означающий скачивание
header("Content-Type: application/octet-stream");

// Размер в байтах
header("Accept-Ranges: bytes");

// Размер файла
header("Content-Length: ".filesize($downloadFile));

// Расположение скачиваемого файла
header("Content-Disposition: attachment; filename=".$downloadFile);  

// Прочитать файл
readfile($downloadFile);


unlink($uploadFile);
unlink($outputFile);