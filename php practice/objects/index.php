
<?php
// Sukuriame tuščią objektą
$obj = new stdClass();

// Pridedame savybes
$obj->name = "Jonas";
$obj->age = 30;

// Naudojame savybes
echo $obj->name; 
echo $obj->age; 

// Sukuriame objektą su konstruktoriumi
class User {
    public $name;
    private $age;

// Konstruktorine funkcija
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    // Metodas
    public function getDetails() {
        return "$this->name is $this->age years old.";
    }
}

// Naujas objektas
$user = new User("Phage", 41);
echo $user->getDetails();
?>