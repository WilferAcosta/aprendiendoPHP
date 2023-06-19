<?php
/**
?Clase: Es una plantilla o definición que describe las características y comportamientos de los
objetos que se pueden crear a partir de ella.
?Objeto: Es una instancia de una clase. Representa un individuo o entidad específica y tiene
sus propias propiedades y comportamientos.
?Atributos: Son las propiedades o características de un objeto. Definen el estado de un objeto
y se representan mediante variables en la clase.
? Métodos: Son las acciones o comportamientos que un objeto puede realizar. Representan las
operaciones que pueden realizarse con un objeto y se definen como funciones en la clase.
?Encapsulación: Es el principio que establece que los atributos y métodos relacionados deben
agruparse en una clase para ocultar los detalles internos y exponer solo una interfaz pública.
Esto se logra mediante la especificación de niveles de acceso (público, privado, protegido)
para los atributos y métodos.
?Herencia: Es un mecanismo que permite crear nuevas clases basadas en clases existentes. La
clase que se utiliza como base se denomina "clase padre" o "superclase", y la clase que se
deriva se llama "clase hija" o "subclase". La herencia permite la reutilización de código y la
creación de jerarquías de clases.
?Polimorfismo: Es la capacidad de un objeto de tomar diferentes formas o comportarse de
diferentes maneras según el contexto. Permite utilizar una interfaz común para objetos de
diferentes clases y proporciona flexibilidad y extensibilidad en el diseño de programas.
 */
/**metodos de acceso
 *? public: Los miembros declarados como public son accesibles desde cualquier lugar, ya sea
*?desde dentro de la clase, desde las clases heredadas o desde fuera de la clase. Son visibles
*?para todos.
*
*? private: Los miembros declarados como private solo son accesibles desde dentro de la
*?misma clase en la que se definen. No pueden ser accedidos desde fuera de la clase, ni
*?siquiera por las clases heredadas.
*
*? protected: Los miembros declarados como protected son accesibles desde dentro de la
*?misma clase y desde las clases heredadas (subclases). Sin embargo, no pueden ser accedidos
*?desde fuera de la clase directamente
 */
class Persona{
    public function __construct(private string $nombre,protected int $edad,){
        $this->nombre = $nombre;
        $this->edad =$edad;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }public function getEdad(){
        return $this->edad;
    }
    public function setEdad($edad){
        $this->edad = $edad;
    }
    private function saludar(){
        echo "Hola, mi nombre es ".$this->nombre." y mi edad es ".$this->edad;
    }
}
$alumno = new Persona("Wilfer",28);
var_dump($alumno);
/** Metodos static
 * ?En programación, un método estático es un método que pertenece a la clase en sí y no a una
instancia específica de la clase. A diferencia de los métodos de instancia, los métodos estáticos se
pueden llamar directamente en la clase sin necesidad de crear un objeto o instancia de la misma.
Algunas características importantes de los métodos estáticos en PHP son:
*? No requieren una instancia: 
Los métodos estáticos se pueden invocar directamente desde la
clase, utilizando la sintaxis Clase::metodoEstatico(), sin necesidad de crear un objeto de la
clase.
*? No pueden acceder a propiedades de instancia: 
Los métodos estáticos no pueden acceder
directamente a las propiedades de instancia de la clase, ya que no tienen una instancia
específica asociada. Solo pueden acceder a propiedades estáticas (variables estáticas) que
pertenezcan a la clase.
*? No pueden utilizar $this: 
En un método estático, no se puede utilizar la palabra clave $this
para hacer referencia a la instancia actual de la clase, ya que no hay una instancia asociada.
*? Útiles para utilidades compartidas: 
Los métodos estáticos son útiles para definir funciones o
utilidades que no dependen del estado de una instancia específica. Se pueden utilizar para
operaciones globales, cálculos matemáticos, acceso a bases de datos, manipulación de
archivos, etc.
 */
class Persona2{
    private static $nombreAuxi;
    public function __construct(private string $nombre,protected int $edad,){
        $this->nombre = $nombre;
        $this->edad =$edad;
        self::$nombreAuxi = $nombre;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }public function getEdad(){
        return $this->edad;
    }
    public function setEdad($edad){
        $this->edad = $edad;
    }
    public static function saludar(){
        echo "<br>Hola, mi nombre es ".self::$nombreAuxi;
    }
}
$alumno2 = new Persona2("olrando",51);
var_dump($alumno2);
//imprimos cada dato de la instancia alimno2.
echo $alumno2->getNombre();
echo $alumno2->getEdad();
echo Persona2::saludar();// asi se llama los metodos static

/**HERENCIA 
 * ?La herencia en programación es un concepto que permite crear nuevas clases basadas en clases
existentes, aprovechando y extendiendo su funcionalidad. La clase existente se conoce como clase
base o clase padre, mientras que la nueva clase creada se llama clase derivada o clase hija.
Algunos conceptos importantes relacionados con la herencia son los siguientes:
*? Clase base / Clase padre: 
Es la clase original de la cual se deriva una nueva clase. Define los
atributos y métodos básicos que serán heredados por las clases derivadas.
*? Clase derivada / Clase hija: 
Es la nueva clase creada que se basa en la clase base. Hereda los
atributos y métodos de la clase base y puede agregar nuevos atributos y métodos, así como
modificar o ampliar los existentes.
*? Herencia simple y herencia múltiple: 
La herencia simple se refiere a la relación en la que una
clase derivada hereda de una sola clase base. Por otro lado, la herencia múltiple se refiere a
la relación en la que una clase derivada hereda de múltiples clases base. No todos los lenguajes
de programación admiten la herencia múltiple.
*? Polimorfismo: 
El polimorfismo es la capacidad de un objeto de una clase derivada para ser
tratado como un objeto de su clase base. Esto permite utilizar una referencia de la clase base
para manipular objetos de diferentes clases derivadas sin tener que conocer la clase concreta
en tiempo de compilación.
*/

class Transporte{
    public function __construct(protected int $ruedas,protected int $capacidad){}
    public function getInfo(){
        return "el transporte tiene " . $this->ruedas . " ruedas y tiene una capacidad de " . $this->capacidad . " personas";
    }
    public function getRuedas(){
        return $this->ruedas;
    }
}
class Bicicletas extends Transporte{
    public function getInfo(){
        return "el transporte tiene " . $this->ruedas . " ruedas y tiene una capacidad de " . $this->capacidad . " personas y no gasta gasolina";
    }
}
class Automoviles extends Transporte{
    public function __construct(protected int $ruedas,protected int $capacidad,protected string $transmision){

    }
    public function getTransmision(){
        return $this->transmision;
    }
}
echo "<br>";
$bicicleta = new Bicicletas(2,1);
var_dump($bicicleta);
echo "<br>";
echo $bicicleta->getInfo();
echo $bicicleta->getRuedas();
echo "<br>";
$auto1 = new Automoviles(4,5,"delantera");
var_dump($auto1);
echo "<br>";
echo $auto1->getInfo();
echo $auto1->getTransmision();

/**CLASS ABSTRACTA 
 * En PHP, una clase abstracta es una clase que no se puede instanciar directamente, sino que sirve
como una plantilla o base para otras clases. Se utiliza para definir la estructura común y los métodos
que deben implementar las clases hijas.
Algunos aspectos importantes sobre las clases abstractas en PHP son los siguientes:
*? Definición de una clase abstracta: 
Para definir una clase abstracta, se utiliza la palabra clave
abstract antes de la declaración de la clase. Por ejemplo:
*? Métodos abstractos: 
Una clase abstracta puede contener métodos abstractos, que son
métodos que no tienen implementación en la clase abstracta, sino que deben ser
implementados en las clases hijjas. La declaración de un método abstracto no incluye el cuerpo
del método. Por ejemplo:
*/
abstract class ClaseAbstracta{
    abstract public function metodoAbstract();
    
}
/**
 *? Herencia de una clase abstracta: 
 Las clases hijas de una clase abstracta deben implementar
todos los métodos abstractos definidos en la clase abstracta. Si una clase hija no implementa
todos los métodos abstractos, también debe ser declarada como una clase abstracta. Una
clase hija puede extender solo una clase abstracta a la vez.
*? Instanciación de clases abstractas: 
No es posible crear una instancia directa de una clase
abstracta utilizando el operador new. Sin embargo, se pueden utilizar las clases hijas para
crear instancias.
*?Implementación de métodos abstractos: 
Las clases hijas deben proporcionar una
implementación concreta de los métodos abstractos definidos en la clase abstracta. La
implementación debe tener la misma firma (nombre y parámetros) que el método abstracto
en la clase abstracta.
 */

abstract class Animales{
    abstract public function hacerSonido();
}
class Perro extends Animales{
    public function __construct(){

    }
    public function hacerSonido(){
        echo " gua gua gua";
    }
}
class Gato extends Animales{
    public function __construct(){

    }
    public function hacerSonido(){
        echo "miau miau miau";
    }
}
echo "<br>";
$perro = new Perro();
$gato = new Gato();
echo $perro->hacerSonido();
echo "<br>";
echo $gato->hacerSonido();

/** 
  *?INTERFACE
* En la programación orientada a objetos, una interfaz es una estructura que define un conjunto de
*  métodos que una clase debe implementar. Es un contrato que especifica qué métodos debe
*   proporcionar una clase sin especificar cómo se implementan esos métodos.
 */
interface MyInterface{
    public function metodo1();
    public function metodo2();
}
/**Ejemplo */
interface Figuras{
    public function calcularArea();
}
class Circulos implements Figuras{
    private $radio;
    public function __construct($radio){
        $this->radio = $radio;
    }
    public function calcularArea(){
        return pi()*pow($this->radio,2);
    }
}
$circulo = new circulos(5);
echo "<br>";
echo $circulo->calcularArea();
/**
 * En PHP, es posible lograr herencia entre interfaces mediante la utilización de la palabra clave
*extends. Esto permite extender una interfaz existente para agregar nuevos métodos o requerir la
*implementación de métodos adicionales.
 */
interface Figuras2{
    public function calcularArea();
}
interface figura3d extends figuras2{
    public function calcularVolumen();
}
class Circulos2 implements Figura3d{
    private $radio;
    public function __construct($radio){
        $this->radio = $radio;
    }
    public function calcularArea(){
        return 6*pow($this->radio,2);
    }
    public function calcularVolumen(){
        return pow($this->radio,3);
    }
}
echo "<br>";
$cubo = new Circulos2(5);
echo $cubo->calcularArea();
echo "<br>";
echo $cubo->calcularVolumen();
/**
 *? Polimorfismo
El polimorfismo en la programación orientada a objetos es un concepto que permite tratar objetos
de diferentes clases de manera uniforme, utilizando una interfaz común. Se basa en la capacidad de
los objetos de una jerarquía de clases de responder de manera diferente a la misma llamada de
método.
*? Herencia: 
El polimorfismo se logra a través de la herencia, donde una clase hija hereda de
una clase padre y puede redefinir o sobrescribir los métodos heredados de la clase padre.
*? Sustitución:
 Los objetos de las clases hijas pueden ser tratados como objetos de la clase
padre, lo que permite utilizarlos en lugar de objetos de la clase padre sin que se produzcan
errores o comportamientos inesperados.
*El polimorfismo se utiliza para crear código más flexible y modular, ya que permite escribir código
*que pueda manejar diferentes tipos de objetos de manera genérica sin preocuparse por los detalles
*específicos de cada clase.

 */
interface TransporteInterface{
    public function getInfo():string;
    public function getRuedas():int;
}
class Transportes implements TransporteInterface{
    public function __construct(protected int $ruedas,protected int $capacidad){

    }
    public function getInfo():string{
        return "el transporte tiene " . $this->ruedas . " ruedas y tiene una capacidad de " . $this->capacidad . " personas y no gasta gasolina";
    }
    public function getRuedas():int{
        return $this->ruedas;
    }
}
class Automiviles extends Transportes implements TransporteInterface{
    public function __construct(protected int $ruedas,protected int $capacidad,protected string $color ){

    }
    public function getInfo(): string{
        return "el transporte Auto tiene ". $this->ruedas . " ruedas y una capacidad de ". $this->capacidad . " personas y tiene color " . $this->color;
    }
    public function getColor(): string{
        return " el color es ". $this->color;

    }
}
echo "<pre>";
echo "<br>";
var_dump($transporte = new Transporte(8,20));
var_dump($auto = new Automiviles(4,4,"azul"));
echo "<br>";
echo $transporte->getInfo();
echo "<br>";
echo $auto->getInfo();
echo "<br>";
echo $auto->getColor();
echo "</pre>";
?>
