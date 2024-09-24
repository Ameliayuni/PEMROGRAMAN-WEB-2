<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 3</title>
</head>
<body>
    <div class= "">
    <?php
       include "Visibility.php";
      
        $visibility = new  Visibility();
        $visibility -> tampilkanData();

        echo "<br>";

        echo "Aksed di luar kelas";
        echo "public: " . $visibility->public . '<br>';
       //  echo "private:" . $visibility->private .  '<br>';
       //  echo "protected:" . $visibility->protected . '<br>';
       echo "<br> <br>";
       echo "<h2> konsep pewarisan </h2>";

       include "Mahasiswa.php";

       $mahasiswa = new Mahasiswa("karina");
       $mahasiswa ->ucapSalam();

       $mahasiswaInggris = new MahasiswaAsing("Yuni amelia");
       $mahasiswaInggris ->ucapSalam();

    ?>
    </div>   
</body>
</html>