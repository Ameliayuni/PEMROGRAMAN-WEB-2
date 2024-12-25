<<<<<<< HEAD
<?php

include "controller/BukuController.php";

$aplikasi = new BukuController();

$request = $_SERVER['REQUEST_URI'];
$request = parse_url($request, PHP_URL_PATH);

switch($request){
    case '/';
    case '/index.php';
        $aplikasi->jalankan();
        break;
    case '/index.php/buku/simpan';
        $aplikasi->simpan();
        break;
    case '/index.php/hapus';
        $apikasi->hapus();
        break;
=======
<?php

include "controller/BukuController.php";

$aplikasi = new BukuController();

$request = $_SERVER['REQUEST_URI'];
$request = parse_url($request, PHP_URL_PATH);

switch($request){
    case '/';
    case '/index.php';
        $aplikasi->jalankan();
        break;
    case '/index.php/buku/simpan';
        $aplikasi->simpan();
        break;
    case '/index.php/hapus';
        $apikasi->hapus();
        break;
>>>>>>> 5b3e1d65e1c965116d8a4ab413ad3c0d26f7f217
}