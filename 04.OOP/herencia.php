<?php
/**
 * La herencia consiste en acceder a métodos y propiedades de otra clase, sin programarlos directamente sobre la clase actual.
 * 
 * Su uso es mediante la palabra reservada "extends"
 * Si requerimos sobreescribir o agregar elementos al constructor padre, usamos la palabra reservada "parent::"; su uso es dentro del constructor de la propia clase.
 * 
 * NO podemos cambiar los nombres de las propiedades
 * 
 */

class Person { // Clase Padre
    // properties
    public $name;
    public $mail;
    public $age;
    public $country;

    // methods
    function __construct($nombre, $correo, $edad, $pais){
        $this->name = $nombre;
        $this->mail = $correo;
        $this->age = $edad;
        $this->country = $pais;

    }

    public function showInfo(){
        return 'El e-mail de ' . $this->name . ' es: ' . $this->mail . '<br/>';
    }
}

class Student extends Person { // hereda de la clase "Person"
    public $career; // nueva propiedad

    // Método constructor que hereda al constructor padre.
    function __construct($nombre, $correo, $edad, $pais, $carrera){
        parent::__construct($nombre, $correo, $edad, $pais);
        $this->career = $carrera;
    }

    function showInfo(){ // override del método showInfo()
        return parent::showInfo() . 'La carrera de ' . $this->name . ' es: ' . $this->career . '<br/>';
    }
    
}

$alex = new Student('Estudihambre', 'alex@mail.com', 34, 'Mexico', 'Computeer Engineer');
echo $alex->showInfo();

$beto = new Person('Beto', 'beto@mail.com', 24, 'Mexico');
echo $beto->showInfo();

