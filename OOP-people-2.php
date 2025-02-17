<?php

class Person
{
    // cambia la visibilità delle variabili in protected 
    protected $name;
    protected $age;
    protected $occupation;

    // definire il costruttore con validazione aggiunta 
    public function __construct($name, $age, $occupation)
    {
        // valida nome 
        if (!is_string($name)) {
            throw new InvalidArgumentException("Name must be a string!");
        }
        $this->name = $name;

        // valida età 
        if (!is_int($age) || $age < 0) {
            throw new InvalidArgumentException("Age must be a non-negative integer!");
        }
        $this->age = $age;

        // valida occupazione 
        if (!is_string($occupation)) {
            throw new InvalidArgumentException("Occupation must be a string!");
        }
        $this->occupation = $occupation;
    }

    // Getter nome
    public function get_name()
    {
        return $this->name;
    }

    // Getter età
    public function get_age()
    {
        return $this->age;
    }

    // Getter occupazione
    public function get_occupation()
    {
        return $this->occupation;
    }

    // Setter nome
    public function set_name($name)
    {
        if (!is_string($name)) {
            throw new InvalidArgumentException("Name must be a string!");
        }
        $this->name = $name;
    }

    // Setter età
    public function set_age($age)
    {
        if (!is_int($age) || $age < 0) {
            throw new InvalidArgumentException("Age must be a non-negative integer!");
        }
        $this->age = $age;
    }

    // Setter occupazione
    public function set_occupation($occupation)
    {
        if (!is_string($occupation)) {
            throw new InvalidArgumentException("Occupation must be a string!");
        }
        $this->occupation = $occupation;
    }
}

// Esempi di una classe modificata tramite setter/getter

try {
    // crea nuova istanza di persona
    $person = new Person("Marco", 27, "Developer");

    // accedi alle propietà tramite getter
    echo "Name: " . $person->get_name() . "\n";
    echo "Age: " . $person->get_age() . "\n";
    echo "Occupation: " . $person->get_occupation() . "\n"; // 

    // aggiorna le propietà tramite setter
    $person->set_name("Marco");
    $person->set_age(29);
    $person->set_occupation("Data Scientist");

    // Accedi alle propietà aggiornate
    echo "Updated Name: " . $person->get_name() . "\n";
    echo "Updated Age: " . $person->get_age() . "\n";
    echo "Updated Occupation: " . $person->get_occupation() . "\n";
} catch (InvalidArgumentException $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
