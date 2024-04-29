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
    $a = new Uva;
    $a->printPHP();
    $a->printColor(" Dulce");

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
    $b = new Papa;
    $b->printPHP();
    $b->printTamanio(" Minerales");

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
    $c = new Borrador;
    $c->printPHP();
    $c->printForma(" Formas");

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
    $d = new Pelota;
    $d->printPHP();
    $d->printDiv(" Divierte");

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
    $e = new Base;
    $e->printPHP();
    $e->printTono(" Claro");

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
    $f = new Vestido;
    $f->printPHP();
    $f->printColor(" Lila");

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
    $g = new Pincel;
    $g->printPHP();
    $g->printTamanio(" Pintar");

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
    $h = new Celular;
    $h->printPHP();
    $h->printMarca(" Samsung");

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
    $i = new Invierno;
    $i->printPHP();
    $i->printTemp(" Frio");

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
    $j = new Oxigeno;
    $j->printPHP();
    $j->printPes(" Peso Atomico");

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
    $k = new Ingenieria;
    $k->printPHP();
    $k->printPro(" Matematicas");

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
    $l = new Novela;
    $l->printPHP();
    $l->printLite(" Emocion ");

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
    $m= new futbol;
    $m->printPHP();
    $m->printDep(" Ejercita");

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
    $n= new Metal;
    $n->printPHP();
    $n->printMat(" Resistente");

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
    $o= new Terrestre;
    $o->printPHP();
    $o->printTip(" traslada");
    
?>