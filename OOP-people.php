<?php

// Definisci una classe persona
class Person
{
    // Definisci una variable d'ambiente costante per le specie
    const SPECIES = "Homo Sapiens";

    //dichiare le altre variabili pubbliche
    public $name;
    public $age;
    public $occupation;

    // definisci il costruttore 
    public function __construct($name, $age, $occupation)
    {
        $this->name = $name;
        $this->age = $age;
        $this->occupation = $occupation;
    }

    // definisci un metodo introduce 
    public function introduce()
    {
        return "Hello, my name is " . $this->name;
    }

    // definisci un metodo describe_job
    public function describe_job()
    {
        return "I am currently working as " . $this->occupation;
    }

    // definisci un metodo statico greet_extraterrestrials
    public static function greet_extraterrestrials($species)
    {
        return "Welcome to Planet Earth " . $species . "!";
    }
}

// Esempi classe persona:

// Nuova istanza della classe persona
$person = new Person("Marco", 27, "Developer");

// chiama il metodo instroduce() e stampa il risultato
echo $person->introduce() . "\n";

// chiama il metodo describe_job() e stampa il risultato
echo $person->describe_job() . "\n"; // 

// chiama il metodo greet_extraterrestrials("Martians") e stampa il risultato
echo Person::greet_extraterrestrials("Martians") . "\n"; // 

// Accedi alla classe const SPECIES e stampa .
echo "Species: " . Person::SPECIES . "\n"; // 