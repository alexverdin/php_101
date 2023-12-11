<?php

class Person { // class (La primera letra va en mayúscula)
    // properties
    public $name;
    public $mail;
    public $age;
    public $country;

    // methods
    public function talk(){
        return "Hello World!";
    }
}

$alex = new Person(); // nueva instancia de clase (objeto)
$alex->name = 'Alex'; // Asignación a una propiedad del objeto 'alex'
$alex->mail = 'alex@mail.com';
$alex->age = 34;
$alex->country = 'Mexico';

$new_class = get_class_vars('Person'); // Devuelve un array con la lista de propiedades de una Clase
print_r($new_class);
echo '<br/>';
echo $alex->name . ' says: ' . $alex->talk(); // Alex says: Hello World!