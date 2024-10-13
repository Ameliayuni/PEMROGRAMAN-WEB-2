<?php

require_once "Buku.php";

class DaftarBuku{

    public function getData(){
        $daftar_buku = array(
            new Buku('Pemrograman Web 2', 'Yuni Amelia', 'Sistem Informasi', '2024'),
            new Buku('Statistika', 'Kevin', 'Andi Publisher', '2020'),
            new Buku('Fisika', 'Alesha', 'Maheswari', '2019'),
            new Buku('Informatika', 'Zea', 'Queen', '2024'),
        );

        return $daftar_buku;
    }

    public function getKolomTabel(){
        return array('No', 'Judul', 'Pengarang', 'Penerbit', 'Tahun');
    }
    
}