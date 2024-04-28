<?php

    class Frutas 
    {
        public function printColor($string)
        {
            echo 'Color' . $string . PHP_EOL;
        }
    }

    class Uva extends Fruta{
        public function printColor($string)
        {
            parent::printColor($string);
            echo 'morado' . $string . PHP_EOL;
        }
    }
    $boby = new Uva;
    $boby->printColor();
    
?>