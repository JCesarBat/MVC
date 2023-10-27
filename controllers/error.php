<?php

class  Error_Class extends Controller {
    public function __construct()
    {   parent::__construct();
        $this->view->render('error/index')  ;
        echo "the requariment dont faund try again\n";

       
    }
    public function method_error($url){
        echo " the method  $url dont exist";
    }

    
}