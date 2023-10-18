1-La Programación Orientada a Objetos (POO) es un paradigma de programación, es decir, un modelo o un estilo de programación que nos da unas guías sobre cómo trabajar con él. Se basa en el concepto de clases y objetos. Un programador diseña un programa de software organizando piezas de información y comportamientos relacionados en una plantilla llamada clase. Luego, se crean objetos individuales a partir de la plantilla de clase. Todo el programa de software se ejecuta haciendo que varios objetos interactúen entre sí para crear un programa más grande.

2-La POO se inspira en la forma en que percibimos y entendemos el mundo que nos rodea, en este enfoque, cada una de estas entidades se convierte en un objeto, con propiedades (datos) y comportamientos (funcionalidades). Por ejemplo, un objeto «Libro» puede tener atributos como el título, el autor y el año de publicación, así como métodos para obtener información sobre el libro, prestarlo o devolverlo a la biblioteca. La clave de la POO radica en la interacción entre estos objetos. Pueden comunicarse entre sí enviándose mensajes y colaborando para lograr un objetivo común. 

3-Una clase es una plantilla que representa a una entidad del mundo real, y define propiedades y métodos para la misma.

4-Un "objeto" ("object" en inglés) es una instancia de una clase, y puedes crear múltiples instancias de la misma clase. Por ejemplo, existe una sola clase Person (Persona), pero muchos objetos de tipo persona pueden ser instancias de esta clase, ej: Carlos, Daniel, Juan, etc.

5-La Herencia es la característica de los lenguajes orientados a objetos, que le permite a una clase (llamada la sublclase o la clase hijo) heredar todas los miembros de otra (llamada la superclase o la clase padre).

6-Las propiedades permiten guardar datos del objeto, cumplen la misma función que una variable; mientras que los métodos permiten realizar operaciones, cumplen la misma accion que una función.

7-El encapsulamiento es uno de los conceptos fundamentales de la programación orientada a objetos (POO) que permite ocultar la complejidad interna de una clase y exponer solo las interfaces públicas. En PHP, el encapsulamiento se utiliza para crear clases más seguras y fáciles de usar.

8-La POO permite abstraer los detalles de implementación y concentrarse en la funcionalidad de alto nivel. Al crear clases que encapsulan datos y comportamiento, se pueden ocultar los detalles de implementación y centrarse en lo que una clase hace en lugar de cómo lo hace.

9-La sobrecarga en PHP ofrece los medios para "crear" dinámicamente propiedades y métodos. Se invoca a los métodos de sobrecarga cuando se interactúa con propiedades o métodos que no se han declarado o que no son visibles en el ámbito activo.

10-Las interfaces de objetos permiten crear código con el cual especificar qué métodos deben ser implementados por una clase, sin tener que definir cómo estos métodos son manipulados.

<?php


class Persona {
    public $nombre;
    public $edad;

    public function _construct($nombre, $edad){
        $this->nombre=$nombre;
        $this->edad=$edad;
    }
};

$Juan= new Persona("Juan", 20);

print_r($Juan);

class Calculadora{
    public function sumar($num1, $num2){
        echo intval($num1) + intval($num2);
    }
    
    public function restar($num1, $num2){
        echo intval($num1) - intval($num2);
    }

    public function multiplicar($num1, $num2){
        echo intval($num1) * intval($num2);
    }

    public function dividir($num1, $num2){
        echo intval($num1) / intval($num2);
    }
    
}

$nuevoCalculo = new Calculadora;
$nuevoCalculo->sumar(2,2);
$nuevoCalculo->dividir(10,2);


interface Animal{
    public function comer($comida);
    public function dormir();
}

class Perro implements Animal{
    
    public function comer($comida){
        echo "Esta comiendo $comida";
    }
    
    public function dormir(){
        echo "Esta durmiendo";
    }

    public function ladrar(){
        echo "Guau!";
    }

}

?>