<?php
    $cmd = $_GET["cmd"];
    
    switch ($cmd) {
        case 'descargarxml':
            $datos = (object) array("nombre" => ["Jose", "Pedro", "Maria"], 
                            "apellido" => ["Perez", "Alcaino", "Martinez"], 
                            "telefono" => ["67859821", "11243212", "66524321"]);
            echo json_encode($datos);
            break;
        
        default:
            die("Comando no valido");
            break;
    }
?>