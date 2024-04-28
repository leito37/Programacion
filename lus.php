<?php

    class animal
    {
        public function printPatas($string)
        {
            echo 'patas' . $string . PHP_EOL;
        }
    }

    class perro extends animal{
        public function printPatas($string)
        {
            parent::printPatas($string);
            echo '4 ' . $string . PHP_EOL;
        }
    }
    $boby = new perro;
    $boby->printPatas("Tiene");
    
?>