<?php
/**
 * Una cadena de metodos es una forma de reducir nuestro código, llamando a varios métodos a la vez.
 * Para esto, se requiere:
 * Que todos los métodos pertenezcan a la misma clase.
 * Que cada método a encadenar tenga un "return $this;"
 * 
 * return $this; // Retorna la instancia actual de la clase.
 */

class User {
    public $name;
    public $username;

    function __construct($name, $username){
        $this->name = $name;
        $this->username = $username;
    }

    public function showName(){
        echo 'Tu Nombre es: ' . $this->name . '<br/>';
        return $this;
    }

    public function showUsername(){
        echo 'Tu Username es: ' . $this->username . '<br/>';
        return $this;
    }
}

$alex = new User('Alejandro', 'Aelfric');
$alex->showName()->showusername(); // evitamos escribir el nombre del objeto en cada llamada al método.