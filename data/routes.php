<?php

$path = $_GET['x'];

// Routen definieren
$routes = [
    '' => $templatepath . 'start/start.php',
];

// Überprüfen, ob die angeforderte Route vorhanden ist
if (array_key_exists($path, $routes)) {
    require_once __DIR__ . $routes[$path];
} else {
    // Wenn die Route nicht gefunden wurde, behandeln Sie dies entsprechend
    require_once __DIR__ . $templatepath ."etc/404.php";
}