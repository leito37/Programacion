<?php
    
    class Frutas
    {
        private function printColor($string)
        {
            echo 'Color' . $string . PHP_EOL;
        }

    }

    class Uva extends Frutas
    {
        public function printColor($string)
        {
            echo 'morado' . $string . PHP_EOL;
        }
    }

    $bunyar = new Uva();
    $bunyar->printColor();

?>