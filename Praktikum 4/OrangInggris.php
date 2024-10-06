<?php

require_once "Orang.php";

class OrangInggris extends Orang{

    //overriede
    public function ucapSalam()
        {
            echo "Hello my name is"  .  $this->nama . "<br>";
        }
}