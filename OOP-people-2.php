<?php

class Person
{
    // Change the visibility of properties to protected
    protected $name;
    protected $age;
    protected $occupation;

    // Define the class constructor with validation
    public function __construct($name, $age, $occupation)
    {
        // Validate name
        if (!is_string($name)) {
            throw new InvalidArgumentException("Name must be a string!");
        }
        $this->name = $name;

        // Validate age
        if (!is_int($age) || $age < 0) {
            throw new InvalidArgumentException("Age must be a non-negative integer!");
        }
        $this->age = $age;

        // Validate occupation
        if (!is_string($occupation)) {
            throw new InvalidArgumentException("Occupation must be a string!");
        }
        $this->occupation = $occupation;
    }

    // Getter for name
    public function get_name()
    {
        return $this->name;
    }

    // Getter for age
    public function get_age()
    {
        return $this->age;
    }

    // Getter for occupation
    public function get_occupation()
    {
        return $this->occupation;
    }

    // Setter for name
    public function set_name($name)
    {
        if (!is_string($name)) {
            throw new InvalidArgumentException("Name must be a string!");
        }
        $this->name = $name;
    }

    // Setter for age
    public function set_age($age)
    {
        if (!is_int($age) || $age < 0) {
            throw new InvalidArgumentException("Age must be a non-negative integer!");
        }
        $this->age = $age;
    }

    // Setter for occupation
    public function set_occupation($occupation)
    {
        if (!is_string($occupation)) {
            throw new InvalidArgumentException("Occupation must be a string!");
        }
        $this->occupation = $occupation;
    }
}

// Example usage of the updated Person class:

try {
    // Create a new instance of the Person class
    $person = new Person("Marco", 27, "Developer");

    // Access properties using getters
    echo "Name: " . $person->get_name() . "\n";
    echo "Age: " . $person->get_age() . "\n";
    echo "Occupation: " . $person->get_occupation() . "\n"; // 

    // Update properties using setters
    $person->set_name("Marco");
    $person->set_age(29);
    $person->set_occupation("Data Scientist");

    // Access updated properties
    echo "Updated Name: " . $person->get_name() . "\n";
    echo "Updated Age: " . $person->get_age() . "\n";
    echo "Updated Occupation: " . $person->get_occupation() . "\n";
} catch (InvalidArgumentException $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
