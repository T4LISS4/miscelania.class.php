<?php
class Miscellania {

public $em;
public $valor;

function mikmConvert($em, $valor) {
    if($em=="k") {
        
        $resultado = $valor / 1.609344;

        return "$resultado";
    }
    elseif($em=="m") {
        
        $resultado = $valor * 1.609344;

        return "$resultado";
    }
    else {
        return false;
    }
}  

}
?>
