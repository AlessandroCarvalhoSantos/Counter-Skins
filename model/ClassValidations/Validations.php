<?php

namespace Model\ClassValidations;


use Exception;

class Validations{

    
    public function treatmentTypeString($value){

        $res = preg_replace('/[0-9\@\.,\;\""]+/', '', $value);
        return $res;
    }


    public function isValidValueNumber($value){

        try{
            if(is_numeric($value)){

                return true;
            }
            else{
                throw new Exception("O valor passado não é um número");
            }
        }
        catch (Exception $error) {
            echo '<br>' . $error . '<br>';
            return false;
        }
    }

    public function isValidValueString($value){

        try{
            if(is_string($value)){

                return true;
            }
            else{
                throw new Exception("O valor passado não é uma string");
            }
        }
        catch (Exception $error) {
            echo '<br>' . $error . '<br>';
            return false;
        }
    }


    
    public function isValidValueBool($value){

        try{
            if(is_bool($value)){

                return true;
            }
            else{
                throw new Exception("O valor passado não é um valor booleano");
            }
        }
        catch (Exception $error) {
            echo '<br>' . $error . '<br>';
            return false;
        }
    }


    public function isValidStringNumber($texto){
        
        if(strcmp($texto,"")!=0){
            if(preg_match("/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ0-9 ,.'\-\"°º_]+$/", $texto)){
               
                return true;
            }
        }
        return false;
    }

    public function isValidlogin($texto){
        
        if(strcmp($texto,"")!=0){
            if(preg_match("/^[A-Za-z0-9_]+$/", $texto)){
               
                return true;
            }
        }
        return false;
    }

    public function isValidCPF($cpf){

        if(is_string($cpf) && !empty($cpf)){

            if(preg_match("/^([0-9]{3}\.?[0-9]{3}\.?[0-9]{3}\-?[0-9]{2})$/", $cpf)) {
                
                $res = $this->removeSpecialChar($cpf);

                if(strlen($res)==11)
                {
                    if(!preg_match('/(\d)\1{10}/', $res)) {

                        for ($t = 9; $t < 11; $t++) {
                            for ($d = 0, $c = 0; $c < $t; $c++) {
                                $d += $res[$c] * (($t + 1) - $c);
                            }
                            $d = ((10 * $d) % 11) % 10;
                            if ($res[$c] != $d) {
                                return false;
                            }
                        }

                        return $res;
                    }
                }
            }
        }
        return false;
    }

    
    public function removeSpecialChar($value){
        $res = preg_replace('/[^\d]/i', '', $value);
        return $res;
    }


    public function removerAspas($value){
        $res = preg_replace("'", '', $value);
        return $res;
    }

   
}

?>