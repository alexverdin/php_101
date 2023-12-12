<?php
/**
 * En PHP el scope se refiere al permiso que tiene nuestro código para acceder a propiedades, métodos, variables y funciones.
 * 
 * public: Es accesible desde cualquier parte del código, dentro y fuera de la clase donde se definió.
 * protected: Es accesible únicamente desde dentro de la clase donde se declaró y clases que la hereden.
 * private: Es accesible SOLO desde dentro de la clase que fue creada (no es accesible desde una instancia ni desde clases heredadas)
 */

class User {
    public $name;
    protected $mail; // accesible solo desde la clase y quienes la hereden
    private $age; // no es accesible desde ningún otro lugar que no sea la propia clase.

    function __construct($name, $mail, $age){
        $this->name = $name;
        $this->mail = $mail;
        $this->age = $age;
    }

    public function showInfo(){
        return $this->mail . ' ' . $this->age; // retorna $mail y $age
    }
}

class Admin extends User {
    public function showInfo(){
        return $this->mail . ' ' . $this->age; // propiedad age inaccesible por su scope "private"
    } 
}

$alex = new User('Alex', 'alex@mail.com', 34);
$alexAdm = new Admin('Alejandro', 'alejandro@mail.com', 36);

echo $alex->showInfo() . '<br/>'; // Se ejecuta la función con normalidad
echo $alexAdm->showInfo() . '<br/>'; // Se ejecuta la parte de mostrar el mail, pero la propiedad "age" arroja un error "Undefined property[]
# echo $alexAdm->showInfo() . '<br/>'; // Error: Undefined property
# echo $alex->mail; // Error: Cannot access protected property



