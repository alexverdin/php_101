<?php
/**
 * Una clase abstracta es una forma de "proteger" el acceso a las clases.
 * Se definen mediante la palabra reservada 'abstract'.
 * 
 * Una clase abstracta NO es accesible para crear una instancia directamente; es decir:
 * Si tenemos una clase abstracta A, no podemos crear directamente una instancia de la misma.
 * Si queremos acceder a los métodos y propiedades de la clase A, debemos crear una clase B que herede a la clase A.
 */

abstract class Person {
    protected $name;
    function __construct($name){
        $this->name = $name;
    }
    public function greet(){
        return 'Hi!';
    }
}

class Guy extends Person{
    protected $gender;

    function __construct($name, $gender){
        parent::__construct($name);
        $this->gender = $gender;
    }

    public function myName(){
        return $this->name;
    }
}
# $alex = new Person(); // Error: Cannot instantiate abstract class

$alex = new Guy('Alex', 'Male');
echo $alex->greet() . ', my name is ' . $alex->myName(); // Ejecuta la función "greet()" de la clase Person.
