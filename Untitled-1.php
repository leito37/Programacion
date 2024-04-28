<?php
    
    class animal
    {
        private function printPatas($string)
        {
            echo 'patas' . $string . PHP_EOL;
        }
    }
    class perro extends animal
    {
        public function printPatas($string)
        {
            echo '-> tiene' . $string . PHP_EOL;
        }
    }
    $boby = new perro;
    $boby->printPatas(" 4 ");
    
//--------------------------------------------

    class alimentos
    {
        private function printEner($string)
        {
            echo 'nutrientes' . $string . PHP_EOL;
        }
    }
    class frutas extends alimentos 
    {
        public function printEner($string)
        {
            echo 'energia' . $string . PHP_EOL;
        }
    }
    $ener = new frutas;
    $ener->printEner("Muchas ");

//--------------------------------------------

    
?>