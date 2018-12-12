<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <script src="https://use.fontawesome.com/aabade6692.js"></script>


    <style>
        .custab{
            border: 1px solid #ccc;
            padding: 5px;
            margin: 5% 0;
            box-shadow: 3px 3px 2px #ccc;
            transition: 0.5s;
        }
        .custab:hover{
            box-shadow: 3px 3px 0px transparent;
            transition: 0.5s;
        }
    </style>
</head>
<body>
<div class="container-fluid" style="margin: 10px;">
    <div class="custyle">
        <table class="table table-hover" custab">
        <thead>
        <tr class="bg-secondary" style="color:white;">
            <th>ID</th>
            <th>Emplazamiento</th>
            <th>CodigoPortal</th>
            <th>CodigoVia</th>
            <th>NumeroVia</th>
            <th>RefCatas</th>
            <th>RefMuni</th>
            <th>Poligono</th>
            <th>ZonaSaturada</th>
            <th class="text-center">Action</th>
        </tr>
        </thead>

        <?php foreach($datosEjemplo as $valor) : ?>
        <tr data-toggle="collapse" href='<?="#collapseExample".$valor->getID() ?>' aria-expanded="false" aria-controls='<?="collapseExample".$valor->getID() ?>'>
            <td><?= $valor->getID() ?></td>
            <td><?= $valor->getEmplazamiento() ?></td>
            <td><?= $valor->getCodigoPortal() ?></td>
            <td><?= $valor->getCodigoVia() ?></td>
            <td><?= $valor->getNumeroVia() ?></td>
            <td><?= $valor->getRefCatas() ?></td>
            <td><?= $valor->getRefMuni() ?></td>
            <td><?= $valor->getPoligono() ?></td>
            <td><?= $valor->getZonaSaturada() ?></td>

            <td class="text-center"><a class='btn btn-info btn-xs' href="#"><i class="fa fa-eye" style="font-size:20px;"></i></a> <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash" style="font-size:20px;"></i></a></td>



        </tr>


            <?php $array=$valor->getListaLicencias();

            $i=0;

            while($i<sizeof($array)) {
                $licencia=next($array);
                    if($licencia===false){

                    }else {


                        echo '
                         <tr class="collapse bg-primary" id="collapseExample' . $valor->getID() . '" style="color:white;">
                            <td class="">' . $licencia->getIdLicencia() . '</td>    
                            <td class="">' . $licencia->getTitulo() . '</td>  
                            <td class="">' . $licencia->getFechaCreacion() . '</td>  
                            <td class="">' . $licencia->getExpediente() . '</td>  
                            <td class="">' . $licencia->getANYO() . '</td>  
                            <td class="">' . $licencia->getLocalId() . '</td>  
                            
                        </tr>
                        
             ';
                        }



                    $i=$i+1;
        }


            ?>



        <?php endforeach; ?>


        </table>
    </div>
</div>


</body>
<footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</footer>
</html>