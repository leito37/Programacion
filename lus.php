<?php

    class Frutas 
    {
        public function printColor($string)
        {
            echo 'Color' . $string . PHP_EOL;
        }
    }

    class Uva extends Frutas{
        public function printColor($string)
        {
            parent::printColor($string);
            echo 'morado' . $string . PHP_EOL;
        }
    }
    $boby = new Uva;
    $boby->printColor(" ");
    //----------------------------------------------------

    class Verduras 
    {
        public function printTamanio($string)
        {
            echo 'Tamanio' . $string . PHP_EOL;
        }
    }

    class Papa extends Verduras{
        public function printTamanio($string)
        {
            parent::printTamanio($string);
            echo 'grande' . $string . PHP_EOL;
        }
    }
    $boby = new Papa;
    $boby->printColor(" ");

    //--------------------------------------------------
    class Utiles 
    {
        public function printForma($string)
        {
            echo 'Forma' . $string . PHP_EOL;
        }
    }

    class Borrador extends Utiles{
        public function printForma($string)
        {
            parent::printForma($string);
            echo 'triangular' . $string . PHP_EOL;
        }
    }
    $boby = new Borrador;
    $boby->printColor(" ");
    //---------------------------------------------------
    class Juguetes
    {
        public function printColor($string)
        {
            echo 'Color' . $string . PHP_EOL;
        }
    }

    class Pelota extends Juguetes{
        public function printColor($string)
        {
            parent::printColor($string);
            echo 'rosado' . $string . PHP_EOL;
        }
    }
    $boby = new Pelota;
    $boby->printColor(" ");
    //----------------------------------------------------
    class Maquillaje
    {
        public function printTono($string)
        {
            echo 'Tono' . $string . PHP_EOL;
        }
    }

    class Base extends Maquillaje{
        public function printTono($string)
        {
            parent::printTono($string);
            echo 'claro' . $string . PHP_EOL;
        }
    }
    $boby = new Base;
    $boby->printColor(" ");
    //---------------------------------------------------
    class Vestimenta
    {
        public function printColor($string)
        {
            echo 'Color' . $string . PHP_EOL;
        }
    }

    class Vestido extends Vestimenta{
        public function printColor($string)
        {
            parent::printColor($string);
            echo 'Lila' . $string . PHP_EOL;
        }
    }
    $boby = new Vestido;
    $boby->printColor(" ");
    //--------------------------------------------------
    class Arte
    {
        public function printTamanio($string)
        {
            echo 'Tamanio' . $string . PHP_EOL;
        }
    }

    class Pincel extends Arte{
        public function printTamanio($string)
        {
            parent::printTamanio($string);
            echo 'grande' . $string . PHP_EOL;
        }
    }
    $boby = new Pincel;
    $boby->printColor(" ");
    //----------------------------------------------------
    class Tecnologia
    {
        public function printMarca($string)
        {
            echo 'Marca' . $string . PHP_EOL;
        }
    }

    class Celular extends Tecnologia{
        public function printMarca($string)
        {
            parent::printMarca($string);
            echo 'samsung' . $string . PHP_EOL;
        }
    }
    $boby = new Celular;
    $boby->printColor(" ");
?>