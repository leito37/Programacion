<?php

    //1)----------------------------------------------------

    class Frutas 
    {
        public function printColor($string)
        {
            echo 'son ' . $string . PHP_EOL;
        }
        public function printPHP()
        {
            echo '<p>Fruta' . PHP_EOL;
        }
    }

    class Uva extends Frutas
    {
        public function printColor($string)
        {
            parent::printColor($string);
            echo '-> Uva' . $string . PHP_EOL;
        }
    }
    $boby = new Uva;
    $boby->printPHP();
    $boby->printColor(" Dulce");

    //2)----------------------------------------------------

    class Verduras 
    {
        public function printTamanio($string)
        {
            echo 'contiene ' . $string . PHP_EOL;
        }
        public function printPHP()
        {
            echo '<p>Verdura' . PHP_EOL;
        }
    }

    class Papa extends Verduras
    {
        public function printTamanio($string)
        {
            parent::printTamanio($string);
            echo '-> Papa' . $string . PHP_EOL;
        }
    }
    $boby = new Papa;
    $boby->printPHP();
    $boby->printTamanio(" Minerales");

    //3)--------------------------------------------------

    class Utiles 
    {
        public function printForma($string)
        {
            echo 'tiene ' . $string . PHP_EOL;
        }
        public function printPHP()
        {
            echo '<p>Utiles' . PHP_EOL;
        }
    }

    class Borrador extends Utiles
    {
        public function printForma($string)
        {
            parent::printForma($string);
            echo '-> Borrador' . $string . PHP_EOL;
        }
    }
    $boby = new Borrador;
    $boby->printPHP();
    $boby->printForma(" Formas");

    //4)---------------------------------------------------

    class Juguetes
    {
        public function printDiv($string)
        {
            echo 'te ' . $string . PHP_EOL;
        }
        public function printPHP()
        {
            echo '<p>Juguete' . PHP_EOL;
        }
    }

    class Pelota extends Juguetes{
        public function printDiv($string)
        {
            parent::printDiv($string);
            echo '-> Pelota' . $string . PHP_EOL;
        }
    }
    $boby = new Pelota;
    $boby->printPHP();
    $boby->printDiv(" Divierte");

    //5)----------------------------------------------------

    class Maquillaje
    {
        public function printTono($string)
        {
            echo 'es de tono ' . $string . PHP_EOL;
        }
        public function printPHP()
        {
            echo '<p>Maquillaje' . PHP_EOL;
        }
    }

    class Base extends Maquillaje{
        public function printTono($string)
        {
            parent::printTono($string);
            echo '-> Base' . $string . PHP_EOL;
        }
    }
    $boby = new Base;
    $boby->printPHP();
    $boby->printTono(" Claro");

    //6)---------------------------------------------------

    class Vestimenta
    {
        public function printColor($string)
        {
            echo 'es de color ' . $string . PHP_EOL;
        }
        public function printPHP()
        {
            echo '<p>Vestimenta' . PHP_EOL;
        }
    }

    class Vestido extends Vestimenta
    {
        public function printColor($string)
        {
            parent::printColor($string);
            echo '-> Vestido' . $string . PHP_EOL;
        }
    }
    $boby = new Vestido;
    $boby->printPHP();
    $boby->printColor(" Lila");

    //7)--------------------------------------------------

    class Brocha
    {
        public function printTamanio($string)
        {
            echo 'puedes ' . $string . PHP_EOL;
        }
        public function printPHP()
        {
            echo '<p>Brocha' . PHP_EOL;
        }
    }

    class Pincel extends Brocha
    {
        public function printTamanio($string)
        {
            parent::printTamanio($string);
            echo '-> Pincel' . $string . PHP_EOL;
        }
    }
    $boby = new Pincel;
    $boby->printPHP();
    $boby->printTamanio(" Pintar");

    //8)----------------------------------------------------

    class Tecnologia
    {
        public function printMarca($string)
        {
            echo 'hizo ' . $string . PHP_EOL;
        }
        public function printPHP()
        {
            echo '<p> Tecnologia' . PHP_EOL;
        }
    }

    class Celular extends Tecnologia{
        public function printMarca($string)
        {
            parent::printMarca($string);
            echo '-> Celular' . $string . PHP_EOL;
        }
    }
    $boby = new Celular;
    $boby->printPHP();
    $boby->printMarca(" Samsung");

    //9)----------------------------------------------------

    class Estacion_Anio
    {
        public function printTemp($string)
        {
            echo 'hace ' . $string . PHP_EOL;
        }
        public function printPHP()
        {
            echo '<p> Estacion' . PHP_EOL;
        }
    }
    class Invierno extends Estacion_Anio
    {
        public function printTemp($string)
        {
            parent:: printTemp($string);
            echo '-> Invierno' . $string . PHP_EOL;
        }

    }
    $boby = new Invierno;
    $boby->printPHP();
    $boby->printTemp(" Frio");

    //10)---------------------------------------------------

    class Element_Quimi
    {
        public function printPes($string)
        {
            echo 'identifica al ' . $string . PHP_EOL;
        }
        public function printPHP()
        {
            echo '<p> Elemento Quimico' . PHP_EOL;
        }
    }
    class Oxigeno extends Element_Quimi
    {
        public function printPes($string)
        {
            parent::printPes($string);
            echo '-> Oxigeno' . $string . PHP_EOL;
        }
    }
    $boby = new Oxigeno;
    $boby->printPHP();
    $boby->printPes(" Peso Atomico");

    //11)---------------------------------------------------

    class Profesion
    {
        public function printPro ($string)
        {
            echo 'aprendes ' . $string . PHP_EOL;
        }
        public function printPHP()
        {
            echo '<p>Profesion ' . PHP_EOL;
        }
    }
    class Ingenieria extends Profesion
    {
        public function printPro ($string)
        {
            parent::printPro($string);
            echo '-> Ingenieria ' . $string . PHP_EOL; 
        }
    }
    $boby = new Ingenieria;
    $boby->printPHP();
    $boby->printPro(" Matematicas");

    //12)---------------------------------------------------

    class GenLite
    {
        public function printLite($string)
        {
            echo 'contiene ' . $string . PHP_EOL;
        }
        public function printPHP()
        {
            echo '<p>Genero Literario' . PHP_EOL;
        }
    }
    class Novela extends GenLite
    {
        public function printLite($string)
        {
            parent:: printLite($string);
            echo '-> Novela' . $string . PHP_EOL;
        }
    }
    $boby = new Novela;
    $boby->printPHP();
    $boby->printLite(" Emocion ");

    //13)---------------------------------------------------

    class Deport
    {
        public function printDep($string)
        {
            echo ' te ' . $string . PHP_EOL;
        }
        public function printPHP()
        {
            echo '<p> Deporte' . PHP_EOL;
        }
    }
    class futbol extends Deport
    {
        public function printDep($string)
        {
            parent::printDep($string);
            echo '-> Futbol' . $string . PHP_EOL;
        }
    }
    $boby= new futbol;
    $boby->printPHP();
    $boby->printDep(" Ejercita");

    //14)---------------------------------------------------

    class Material
    {
        public function printMat($string)
        {
            echo ' es muy ' . $string . PHP_EOL;
        }
        public function printPHP()
        {
            echo '<p>Material' . PHP_EOL;
        }
    }
    class Metal extends Material
    {
        public function printMat($string)
        {
            parent::printMat($string);
            echo '-> Metal ' . $string . PHP_EOL;
        }
    }
    $boby= new Metal;
    $boby->printPHP();
    $boby->printMat(" Resistente");

    //15)---------------------------------------------------

    class Tipo_Transp
    {
        public function printTip($string)
        {
            echo ' te ' . $string . PHP_EOL;
        }
        public function printPHP()
        {
            echo '<p>Tipo de transporte' . PHP_EOL;
        }
    }
    class Terrestre extends Tipo_Transp
    {
        public function printTip($string)
        {
            parent::printTip($string);
            echo '-> Terrestre' . $string . PHP_EOL;
        }
    }
    $boby= new Terrestre;
    $boby->printPHP();
    $boby->printTip(" traslada");
    
?>