<<<<<<< HEAD
<?php

class Database{
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $databaseName = 'perpustakaan';
    private $koneksi;

    public function __construct(){
        $this->koneksi = new mysqli($this->host, $this->username, $this->password, $this->databaseName);
    }

    public function __destruct ()
    {
        $this->koneksi->close();
    }

    public function getKoneksi(){
        return $this->koneksi;
    }
=======
<?php

class Database{
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $databaseName = 'perpustakaan';
    private $koneksi;

    public function __construct(){
        $this->koneksi = new mysqli($this->host, $this->username, $this->password, $this->databaseName);
    }

    public function __destruct ()
    {
        $this->koneksi->close();
    }

    public function getKoneksi(){
        return $this->koneksi;
    }
>>>>>>> 5b3e1d65e1c965116d8a4ab413ad3c0d26f7f217
}