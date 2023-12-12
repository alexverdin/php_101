<?php
/**
 * El método "__construct()" (llamado también constructor) permite asignar valores a las propiedades de una clase.
 * Usarlo evita la repetición de código de asignación de valores a los objetos y se ejecuta cada vez que una instancia de la clase que lo contiene es creada.
 * Recibe los argumentos pasados al objeto en el momento de ser creado.
 * 
 * 
 */

class Person { // class (La primera letra va en mayúscula)
    // properties
    public $name;
    public $mail;
    public $age;
    public $country;

    // methods
    function __construct($nombre, $correo, $edad, $pais){ # Metodo Constructor, público
        $this->name = $nombre;
        $this->mail = $correo;
        $this->age = $edad;
        $this->country = $pais; # Cada asignación es obligatoria como parámetro.
        echo 'Ejecucion de Metodo __construct() para: ' . $this->name . '<br/>';

    }

    public function showInfo(){
        echo 'Name: ' . $this->name . '<br/>';
        echo 'Mail: ' . $this->mail . '<br/>';
        echo 'Age: ' . $this->age . '<br/>';
        echo 'Country: ' . $this->country . '<br/>';

    }
}

$alex = new Person('Alex', 'alex@mail.com', 34, 'Mexico');
$alex->showInfo();

$beto = new Person('Beto', 'beto@mail.com', 24, 'Mexico');
$beto->showInfo();