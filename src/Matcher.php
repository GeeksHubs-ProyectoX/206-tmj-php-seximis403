<?php

namespace Matcher;

class Matcher
{
    //Matcher que soporte un separador :
    public function apply01($input){
        return explode(null, $input);
    }

    //Matcher que soporte números
    public function apply02($input){
        return preg_match(null, $input);
    }

    //Matcher que soporte letras minúsculas
    public function apply03($input){
        return preg_match(null, $input);;
    }

    //Matcher que soporte letras mayúsculas test4X
    public function apply04($input){
        return preg_match(null, $input);
    }

    //Matcher que soporte letras minúsculas y mayúsculas
    public function apply05($input){
        return preg_match(null, $input);
    }

    //Matcher que solo soporte números
    public function apply06($input){
        return preg_match(null, $input);;
    }

    //Matcher que soporte espacios vacíos test7X
    public function apply07($input){
        return preg_match(null, $input );
    }

    //Matcher que valide formato fecha dd-mm-yyyy test9X
    public function apply09($input){
        return preg_match(null, $input);
    }

    //Matcher que valide extensión de ficheros de texto .doc|.pptx|.word
    public function apply10($input){
        return preg_match(null, $input);
    }

    //Matcher que valide un correo electrónico
    public function apply11($input){
        $pattern = null;
        return preg_match($pattern, $input) === 1;
    }
}

