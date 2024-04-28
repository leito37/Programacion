<?php
    //15 ejemplos de herencia public
    //1
    class animal{
        public function printPatas($string){
            echo 'tiene' . $string . PHP_EOL;
        }
    }
    class perro extends animal{
        public function printPatas($string){
            echo '4 ' . $string . PHP_EOL;
        }
    }
    $boby = new perro;
    $boby->printPatas("patas"); 

    //2
    class vehiculoTerrestre{
        public function printAcelerar($string){
            echo 'el vehiculo esta acelerando' . $string . PHP_EOL;
        }
    }
    class toyota extends vehiculoTerrestre{
        public function printAcelerar($string)
        {
            echo 'el toyota acelera a ' . $string . PHP_EOL;
        }
    }
    $carro = new toyota;
    $carro->printAcelerar("40km/s");

    //3
    class fruta{
        public function printColor($string){
            echo 'color' . $string . PHP_EOL;
        }
    }
    class manzana extends fruta{
        public function printColor($string){
            echo 'rojo' . $string . PHP_EOL;
        }
    }
    $manzIsrael = new fruta;
    $manzIsrael->printColor("-");

    //4
    class instMusical{
        public function printSonido($string){
            echo 'sonido de ' . $string . PHP_EOL;
        }
    }
    class instPercusion extends instMusical{
        public function printSonido($string)
        {
            parent::printSonido($string);
            echo ' es de percucion ' . PHP_EOL;
        }
    }
    $cajon = new instPercusion;
    $cajon->printSonido("cajón");

    //5
    class pais{
        public function printCapital($string){
            echo 'la capital es ' . $string . PHP_EOL;
        }
    }
    class latinoAmerica extends pais{
        public function printCapital($string)
        {
            echo $string . ' esta en latino america' . PHP_EOL;
        }
    }
    $peru = new latinoAmerica;
    $peru->printCapital("Perú");

    //6
    class profesion{
        public function printSalario($string){
            echo 'salario estimado es '. $string . PHP_EOL;
        }
    }
    class universidad extends profesion{
        public function printSalario($string)
        {
            echo 'salario universitario' . $string . PHP_EOL;
        }
    }
    $ingenieria = new universidad;
    $ingenieria->printSalario("2500");

    //7
    class comida{
        public function printComida($string){
            echo 'nuestra ' . $string . PHP_EOL;
        }
    }
    class tipComida extends comida{
        public function printComida($string)
        {
            echo $string . " es deliciosa" . PHP_EOL;
        }
    }
    $pizza = new tipComida;
    $pizza->printComida(" Pizza ");
    
    //8
    class estAnio {
        public function printEstacion($string){
            echo 'la mejor estacion es ' . $string . PHP_EOL;
        }
    }
    class estacion extends estAnio{
        public function printEstacion($string)
        {
            echo $string . ' esta estacion es muy bonita' . PHP_EOL;
        }
    }
    $verano = new estacion;
    $verano->printEstacion("verano");
?>