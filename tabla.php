<?php
require 'modelo/Locales.php';
require 'database/Connection.php';
require 'database/QueryBuilder.php';
require_once 'core/App.php';

$config=require_once 'app/config.php';
App::bind('config',$config);
$connection=App::getConnection();

#$datosEjemplo=[new Locales(2,"dembow emplazamiento","54647","4654645","4345","referencia 3543534","3545346",200,"zona extra saturada","Comentario del bueno dembow")];
$queryBuilder=new QueryBuilder('local','Locales');
$datosEjemplo=$queryBuilder->findAll();


require 'vista/tabla.view.php';