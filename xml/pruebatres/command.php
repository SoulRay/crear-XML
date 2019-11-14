<?php
    $cmd = $_GET["cmd"];
    
    switch ($cmd) {
        case 'descargarxml':
            $datos = (object) array("nombre" => ["Jose", "Pedro", "Maria"], 
                            "apellido" => ["Perez", "Alcaino", "Martinez"], 
                            "telefono" => ["67859821", "11243212", "66524321"]);

            $xml = new DOMDocument();
            $xml->formatOutput = true;

            $cuerpo = $xml->createElement('cuerpo');
            $cuerpo = $xml->appendChild($cuerpo);
            for ($i=0; $i < count($datos->nombre) ; $i++) { 
                $nombre = $xml->createElement('nombre');
                $nombre->nodeValue = $datos->nombre[$i];
                $cuerpo->appendChild($nombre);

                $apellido = $xml->createElement('apellido');
                $apellido->nodeValue = $datos->apellido[$i];
                $cuerpo->appendChild($apellido);

                $telefono = $xml->createElement('telefono');
                $telefono->nodeValue = $datos->telefono[$i];
                $cuerpo->appendChild($telefono);
            }

            echo json_encode($xml->saveXML());
            break;
        
        default:
            die("Comando no valido");
            break;
    }
?>