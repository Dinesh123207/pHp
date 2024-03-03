<?php

// What is class and instance
class Person{
    public  $name;
    public  $property;
    private $age;

    public function __construct($name,$surname){
        echo $name .' '. $surname;

        $this ->name = $name;
        $this ->surname =  $surname;

    }
    public function setAge($age){ 
        $this -> age = $age;
    }
    
}
$p = new Person('dinesh', 'kumar');
$p -> setAge(30);



// $p2 -> name = 'gaurav';
// $p2 -> surname = 'sharma';
echo '<pre>';
var_dump($p);
echo '</pre>';

// Create Person class in Person.php

// Create instance of Person

// Using setter and getter
?>