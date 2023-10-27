<?php

class   Main extends Controller {
    public function __construct(){
        
        parent::__construct();

        $this->view->render('main/index')   ;
        echo    "provando controlador \n";
    }
    public function saludo(){
        echo " estas saludando \n";
    }
 
}

