<?php
/**
 * La palabra reservada 'static' nos permite acceder a propiedades o métodos de una clase, sin tener que instanciarla.
 * 
 * Estos elementos  
 */

class Person {
    public static $dia = '21 de Enero';

    public static function greeting($name = null){
        if($name){
            return 'Hi!, ' . $name;
        }
        return 'Hi!, Anon';
    }

    public static function birthday(){
        #return $this->dia; // Error: "Accessing static property Person::$dia as non static"
        return self::$dia; // A partir de PHP7 podemos usar 'self' para hacer referencia a la clase donde nos encontramos, o usar el nombre de la clase: return Person::$dia;
    }
}

$alex = new Person();

echo Person::$dia;
# echo $alex->dia; // Error: "Accessing static property Person::$dia as non static"

echo '<br/>' . $alex->greeting('Alex'); // Hi!, Alex
echo '<br/>' . Person::greeting(); // Hi!, Anon
echo '<br/>' . Person::birthday(); // 21 de Enero