<?php

/*Este archivo solo funciona con permisos de create database, use database
en 000webhost gratuito no.*/

/*Array de configuración 'db' usado por todas las 
funciones CRUD.*/
return [
  'db' => [
    'host' => 'localhost',
    'user' => 'id17470503_admini',
    'pass' => AQUI TU PASSWORD,
    'name' => 'id17470503_webcammusica',
    'options' => [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]
  ]
];
?>
