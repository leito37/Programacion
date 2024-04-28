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

    //--------------------------------------------
    class animal{
        private function printPatas($string){
            echo "patas";
        }
    }
    class perro extends animal{
        public function printPatas(){
            echo "4 " . $string . PHP_EOL;
        }
    }
    $boby = new perro;
    $boby->printPatas("Tiene")    
?>