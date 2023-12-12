<?php
/**
 * La palabra reservada 'this' permite acceder a variables y funciones que no están en el mismo scope de donde se usa.
 * 
 *  La palabra clave $this en PHP se refiere a la instancia actual del objeto, y puede acceder a todas las propiedades y métodos de la clase, sin importar cuán anidados estén, siempre y cuando estos sean accesibles desde el contexto en el que se utiliza $this.
* 
* Por ejemplo, $this no puede acceder a las propiedades o métodos PRIVADOS que están definidos en una clase padre, ya que estos no son accesibles desde la clase hija.
 * 
 * La sintaxis es: $this->nombreVariable
 * Es importante notar que el nombreVariable no lleva signo de '$'
 */

class Person { // class (La primera letra va en mayúscula)
    // properties
    public $name;
    public $mail;
    public $age;
    public $country;

    // methods
    public function talk(){
        echo $this->name . ' says: Hello World!<br/>'; // this
    }
}

$Alex = new Person();

$Alex->name = 'Alex';
$Alex->talk();

# Herencia
class Padre {
    public $mensaje = "Hola, mundo!";
}

class Hijo extends Padre {
    public function mostrarMensaje() {
        echo $this->mensaje . ' from: inheritance.<br/>';  // "Hola, mundo!"
    }
}

$hijo = new Hijo();
$hijo->mostrarMensaje();  // Imprime: "Hola, mundo! from: inheritance."