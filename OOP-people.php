<?php

// Define a class called Person
class Person
{
    // Define a class constant for the species
    const SPECIES = "Homo Sapiens"; // Constant is in uppercase

    // Declare the 3 public class properties: $name, $age, and $occupation
    public $name;
    public $age;
    public $occupation;

    // Define the class constructor
    public function __construct($name, $age, $occupation)
    {
        $this->name = $name;
        $this->age = $age;
        $this->occupation = $occupation;
    }

    // Define a method called introduce
    public function introduce()
    {
        return "Hello, my name is " . $this->name;
    }

    // Define a method called describe_job
    public function describe_job()
    {
        return "I am currently working as " . $this->occupation;
    }

    // Define a static method called greet_extraterrestrials
    public static function greet_extraterrestrials($species)
    {
        return "Welcome to Planet Earth " . $species . "!";
    }
}

// Example usage of the Person class:

// Create a new instance of the Person class
$person = new Person("Marco", 27, "Developer");

// Call the introduce method and print the result
echo $person->introduce() . "\n";

// Call the describe_job method and print the result
echo $person->describe_job() . "\n"; // 

// Call the static greet_extraterrestrials method and print the result
echo Person::greet_extraterrestrials("Martians") . "\n"; // 

// Access the class constant
echo "Species: " . Person::SPECIES . "\n"; // 