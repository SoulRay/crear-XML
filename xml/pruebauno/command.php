<?php
    $datos = (object) array("nombre" => ["Jose", "Pedro", "Maria"], 
                            "apellido" => ["Perez", "Alcaino", "Martinez"], 
                            "telefono" => ["67859821", "11243212", "66524321"]);
    $xml = '<?xml version="1.0" encoding="UTF-8" ?>';
    $xml .= '<cuerpo>';
    for ($i=0; $i < count($datos->nombre) ; $i++) { 
        $xml .= '<nombre>'.$datos->nombre[$i].'</nombre>';
        $xml .= '<apellido>'.$datos->apellido[$i].'</apellido>';
        $xml .= '<telefono>'.$datos->telefono[$i].'</telefono>';
    }
    $xml .= '</cuerpo>';
    echo $xml;
?>