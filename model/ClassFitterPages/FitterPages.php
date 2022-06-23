<?php

namespace Model\ClassFitterPages;

use Exception;
use Model\ClassValidations\Validations;

class FitterPages{

    private $titlePage;
    private $page;
    private $validator;
    private $path;
    private $variablePath;


    public function __construct(){
        $this->validator = new Validations;
    }

    public function setVariablePath($value){
        $this->variablePath = $value;
    }

    public function setTitlePage($value){

        if($this->validator->isValidValueString($value)){
            $this->titlePage = $this->validator->treatmentTypeString($value);
        }
    }

    public function setPathPage($value){

        if($this->validator->isValidValueString($value))
        {
            $this->path = $value;
        }
    }

    public function setNamePage($value, $type){
        
        if($this->validator->isValidValueString($value) && $this->validator->isValidValueString($type))
        {
            $value = $this->validator->treatmentTypeString($value);
            $type = $this->validator->treatmentTypeString($type);
            $pathTemp = __DIR__. "/../../$this->path" . "$value.$type";

            if(file_exists($pathTemp))
            {
                $this->page = $pathTemp;
                return true;
            }
            echo new Exception("Esse arquivo não existe.");
            
        }
        return false;
    }



    public function execute(){

        include(__DIR__."/../../view/layout/configs/htmlInitialStructure.php");

        
            echo '<div id="divCentral" class="d-flex flex-column container-fluid p-0 min-vh-100 justify-content-between">';


            if($_SESSION['type'] == 'a'){
                include(__DIR__."/../../view/layout/headerAdmin.php");
            }elseif($_SESSION['type'] == 'u'){
                include(__DIR__."/../../view/layout/headerUser.php");
            }else{
                include(__DIR__."/../../view/layout/headerGuest.php");
            }

            echo '<div class="container-fluid p-0 m-0">';
            
            include($this->page);

            echo '</div>';
            

            
            include(__DIR__."/../../view/layout/footer.php");
            
    
            echo '</div>';
        
        
        include(__DIR__."/../../view/layout/configs/htmlFinalStructure.php");
    }

}

?>