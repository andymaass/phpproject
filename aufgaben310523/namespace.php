<?php



// Übung 1: 
// Erstelle einen Namespace namens "Util" und darin eine Klasse namens "StringHelper", die eine statische Methode "reverse" hat, 
// die einen String umkehrt. Verwende den Namespace und rufe die Methode auf, um einen umgekehrten String auszugeben.



namespace Util;

class StringHelper
{
    public static function reverse($string)
    {
        return strrev($string);
    }
}

// Aufruf der Methode innerhalb des Namespaces

$string = "Hello World!";
$reversedString = StringHelper::reverse($string);
echo $reversedString;



// Übung 2:
// Erstelle einen Namespace namens "Logging" und darin eine Klasse namens "Logger", die eine Methode "log" hat, 
// die eine Nachricht auf der Konsole ausgibt. Verwende den Namespace und rufe die Methode auf, um eine Nachricht zu protokollieren.



namespace Logging;

class Logger {
    public function log($message) {
        echo $message . "\n";
    }
}

// Verwendung des Namespaces und Aufruf der log-Methode

$logger = new Logger();
$logger->log("Eine Nachricht wird protokolliert.");