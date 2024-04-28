<?php
    
    class Educacion
    {
        private function printItem($string)
        {
            echo 'Educar: ' . $string . PHP_EOL;
        }

        private function printPHP()
        {
            echo 'PHP is great.' . PHP_EOL;
        }
    }

    class Inteligencia extends Educacion
    {
        private function printItem($string)
        {
            parent::printItem($string);
            echo 'Inteligencia->: ' . $string . PHP_EOL;
        }
    }

    $bunyar = new Inteligencia();
    $bunyar->printItem("Hello");

?>