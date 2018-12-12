<?php
require 'modelo/Locales.php';
require 'modelo/Licencias.php';
require 'database/Connection.php';
require 'database/QueryBuilder.php';
require_once 'core/App.php';

$config=require_once 'app/config.php';
App::bind('config',$config);
$connection=App::getConnection();

#$datosEjemplo=[new Locales(2,"dembow emplazamiento","54647","4654645","4345","referencia 3543534","3545346",200,"zona extra saturada","Comentario del bueno dembow")];
$queryBuilderLocales=new QueryBuilder('local','Locales');
$datosEjemplo=$queryBuilderLocales->findAll();

$queryBuilderLicencia=new QueryBuilder('licencia','Licencias');
$datosEjemploLicencia=$queryBuilderLicencia->findAll();

unirReferencias($datosEjemplo,$datosEjemploLicencia);


function unirReferencias($arrayLocales,$arrayLicencias){

    foreach ($arrayLocales as $local){
        $idLocal=$local->getID();
        unset($localArray);
        $localArray[]=$local->getListaLicencias();
        foreach ($arrayLicencias as $licencia){
            $idRefLocal=$licencia->getLocalID();
            if($idLocal===$idRefLocal){
                $localArray[]=$licencia;
                #echo '<script>alert('.sizeof($localArray).')</script>';
            }
        }
        $local->setListaLicencias($localArray);

    }
    return $arrayLocales;
}


require 'vista/tabla.view.php';