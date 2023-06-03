<?php

//arrays a)numerisches array

$array = array(1, 2, 3, 4, 5);

foreach ($array as $element) {
    echo $element . ".\n"; 
}

echo "\n";

// b) assoziatives array

$array = array(
    "Name" => "Max",
    "Alter" => 25,
    "Stadt" => "Berlin"
);

foreach ($array as $key => $value) {
    echo $key . ": " . $value . ".\n";
}

echo "\n";

//a)Erstelle eine Klasse namens "Person" mit den Eigenschaften "Name" und "Alter". Schreibe einen Konstruktor, der die Eigenschaften initialisiert. 
//  Erstelle dann ein Objekt der Klasse und gib die Werte der Eigenschaften auf dem Bildschirm aus.
//b)Erstelle eine Methode in der Klasse "Person", die das Alter um 1 erhöht. Rufe die Methode für das zuvor erstellte Objekt auf und gib das aktualisierte Alter aus.

class Person {
    private $name;
    private $alter;

    public function __construct($name, $alter) {
        $this->name = $name;
        $this->alter = $alter;
    }

    public function getName() {
        return $this->name;
    }

    public function getAlter() {
        return $this->alter;
    }

    public function erhoeheAlter() {
        $this->alter++;
    }
}

// Objekt der Klasse "Person" erstellen
$person = new Person("Andy Maass", 40);

// Werte der Eigenschaften ausgeben
echo "Name: " . $person->getName() . "\n";
echo "Alter: " . $person->getAlter() . "\n";

// Das Alter erhöhen und das aktualisierte Alter ausgeben
$person->erhoeheAlter();
echo "Aktualisiertes Alter: " . $person->getAlter() . "\n";


?>