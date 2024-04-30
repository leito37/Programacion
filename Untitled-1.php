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

//----------------------Clase base Figura-------------------------

class Figura 
{
    public $color;
    public $area;

    public function calcularArea() 
    {
        $this->area = 0;
    }

    public function dibujar() 
    {
        echo "Dibujando figura..." . PHP_EOL;
    }
}

//-----------------------Subclase Circulo-------------------------

class Circulo extends Figura 
{
    public $radio;

    public function calcularArea() 
    {
        $this->area = pi() * pow($this->radio, 2);
    }

    public function dibujar() 
    {
        echo "<p>Dibujando círculo..." . PHP_EOL;
    }
}

//---------------------Subclase Rectangulo------------------------

class Rectangulo extends Figura 
{
    public $base;
    public $altura;

    public function calcularArea() 
    {
        $this->area = $this->base * $this->altura;
    }

    public function dibujar() 
    {
        echo "<p>Dibujando rectángulo..." . PHP_EOL;
    }
}

//------Crear objetos Circulo y Rectangulo y mostrar sus áreas------

$circulo = new Circulo();
$circulo->radio = 5;
$circulo->calcularArea();

$rectangulo = new Rectangulo();
$rectangulo->base = 4;
$rectangulo->altura = 3;
$rectangulo->calcularArea();

echo "Área del círculo: " . $circulo->area . PHP_EOL;
echo "<p>Área del rectángulo: " . $rectangulo->area . PHP_EOL;

//--------------Llamar al método dibujar de cada figura--------------

$circulo->dibujar();
$rectangulo->dibujar();

//---------------------------Clase Empleado---------------------------

class Empleado 
{
    public $nombre;
    public $salario;

    public function calcularPago()
    {
        return $this->salario;
    }
}

//---------------------------Subclase Gerente---------------------------
class Gerente extends Empleado 
{
    public $departamento;

    public function calcularPago() 
    {
        return parent::calcularPago() + 1000; // Añadir bono adicional al salario base
    }
}

//--------Crear objetos Empleado y Gerente y mostrar sus propiedades--------

$empleado = new Empleado();
$empleado->nombre = "Juan";
$empleado->salario = 2000;

$gerente = new Gerente();
$gerente->nombre = "Ana";
$gerente->salario = 3000;
$gerente->departamento = "Ventas";

echo "<p>Nombre del empleado: " . $empleado->nombre . ", Salario: $" . $empleado->salario . PHP_EOL;
echo "<p>Nombre del gerente: " . $gerente->nombre . ", Salario: $" . $gerente->salario . ", Departamento: " . $gerente->departamento . PHP_EOL;

//---------------------------Clase Vehiculo---------------------------

class Vehiculo 
{
    public $marca;
    public $modelo;

    public function arrancar() 
    {
        echo "Arrancando vehículo..." . PHP_EOL;
    }
}

//---------------------------Subclase Coche---------------------------

class Coche extends Vehiculo 
{
    public $numPuertas;
}

//---------------------------Subclase Camion---------------------------

class Camion extends Vehiculo 
{
    public $cargaMaxima;
}

//--------Crear objetos Coche y Camion y mostrar sus propiedades--------

$coche = new Coche();
$coche->marca = "Toyota";
$coche->modelo = "Corolla";
$coche->numPuertas = 4;

$camion = new Camion();
$camion->marca = "Volvo";
$camion->modelo = "FH16";
$camion->cargaMaxima = "10 toneladas";

echo "<p>Coche: " . $coche->marca . " " . $coche->modelo . ", Número de puertas: " . $coche->numPuertas . PHP_EOL;
echo "<p>Camión: " . $camion->marca . " " . $camion->modelo . ", Carga máxima: " . $camion->cargaMaxima . PHP_EOL;

//---------------------------Clase Animal---------------------------

class Animal 
{
    public $nombre;
    public $edad;
}

//---------------------------Subclase Perro---------------------------

class Perro extends Animal 
{
    public $raza;

    public function hacerSonido() 
    {
        echo "Ladrando..." . PHP_EOL;
    }
}

//---------------------------Subclase Gato---------------------------

class Gato extends Animal {
    public $color;

    public function hacerSonido() 
    {
        echo "Maullando..." . PHP_EOL;
    }
}

//--------Crear objetos Perro y Gato y mostrar sus propiedades--------

$perro = new Perro();
$perro->nombre = "Bobby";
$perro->edad = 3;
$perro->raza = "Labrador";

$gato = new Gato();
$gato->nombre = "Whiskers";
$gato->edad = 2;
$gato->color = "Negro";

echo "<p>Perro: " . $perro->nombre . ", Edad: " . $perro->edad . ", Raza: " . $perro->raza . PHP_EOL;
echo "<p>Gato: " . $gato->nombre . ", Edad: " . $gato->edad . ", Color: " . $gato->color . PHP_EOL;

//---------------------------Clase Fruta---------------------------
class Fruta 
{
    public $nombre;
    public $color;

    public function comer() 
    {
        echo "Comiendo fruta..." . PHP_EOL;
    }
}

//---------------------------Subclase Manzana---------------------------

class Manzana extends Fruta 
{
    public $sabor;

    public function comer() 
    {
        echo "Comiendo manzana..." . PHP_EOL;
    }
}

//---------------------------Subclase Banana---------------------------

class Banana extends Fruta 
{
    public $longitud;

    public function comer() 
    {
        echo "Comiendo banana..." . PHP_EOL;
    }
}

//-------Crear objetos Manzana y Banana y mostrar sus propiedades-------

$manzana = new Manzana();
$manzana->nombre = "Manzana Fuji";
$manzana->color = "Roja";
$manzana->sabor = "Dulce";

$banana = new Banana();
$banana->nombre = "Banana Cavendish";
$banana->color = "Amarilla";
$banana->longitud = "20 cm";

echo "<p>Manzana: " . $manzana->nombre . ", Color: " . $manzana->color . ", Sabor: " . $manzana->sabor . PHP_EOL;
echo "<p>Banana: " . $banana->nombre . ", Color: " . $banana->color . ", Longitud: " . $banana->longitud . PHP_EOL;

//---------------------------Clase Persona---------------------------

class Persona 
{
    public $nombre;
    public $edad;

    public function presentarse() 
    {
        echo "Hola, soy {$this->nombre} y tengo {$this->edad} años." . PHP_EOL;
    }
}

//---------------------------Subclase Estudiante---------------------------

class Estudiante extends Persona 
{
    public $grado;

    public function presentarse() 
    {
        parent::presentarse();
        echo "Soy un estudiante de {$this->grado}." . PHP_EOL;
    }
}

//---------------------------Subclase Profesor---------------------------

class Profesor extends Persona 
{
    public $especialidad;

    public function presentarse() 
    {
        parent::presentarse();
        echo "Soy un profesor especializado en {$this->especialidad}." . PHP_EOL;
    }
}

//------Crear objetos Estudiante y Profesor y mostrar sus propiedades------

$estudiante = new Estudiante();
$estudiante->nombre = "Juan";
$estudiante->edad = 20;
$estudiante->grado = "ingeniería";

$profesor = new Profesor();
$profesor->nombre = "Ana";
$profesor->edad = 35;
$profesor->especialidad = "matemáticas";

echo "<p>Estudiante: " . $estudiante->nombre . ", Edad: " . $estudiante->edad . ", Grado: " . $estudiante->grado . PHP_EOL;
echo "<p>Profesor: " . $profesor->nombre . ", Edad: " . $profesor->edad . ", Especialidad: " . $profesor->especialidad . PHP_EOL;

//---------------------------Clase Forma---------------------------

class Forma 
{
    public $nombre;
    public $lados;
}

//---------------------------Subclase Triangulo---------------------------
class Triangulo extends Forma 
{
    public $angulos;
}

//---------------------------Subclase Cuadrado---------------------------

class Cuadrado extends Forma 
{

}