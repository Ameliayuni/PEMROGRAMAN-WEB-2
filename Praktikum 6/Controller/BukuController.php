<<<<<<< HEAD
<?php

require_once "Model/DaftarBuku.php";

class BukuController{

    public function jalankan(){
        //mengakses model
        $data = new DaftarBuku();

        //memberi data model  ke view dan menampilkan view
        include "View/BukuView.php";
    }
=======
<?php

require_once "Model/DaftarBuku.php";

class BukuController{

    public function jalankan(){
        //mengakses model
        $data = new DaftarBuku();

        //memberi data model  ke view dan menampilkan view
        include "View/BukuView.php";
    }
>>>>>>> 5b3e1d65e1c965116d8a4ab413ad3c0d26f7f217
}