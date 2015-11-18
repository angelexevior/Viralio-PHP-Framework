<?php

/**
 * Description of platform
 *
 * @author Angelos
 */
class platform {
    
    //Language provisions
    public $lang;
    
    function platform(){
        //Language provision
        if(isset($_GET["lang"])){
            $this->lang=$_GET["lang"];
        }else{
            $this->lang="en";
        }
    }
    //sample function
    public function getPage(){
        if(isset($_GET['page'])){
                    $page = $_GET['page'];
                } else {
                    $page = 'orders';
                }
                return $page;
    }
    
}

?>
