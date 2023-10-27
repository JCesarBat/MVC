<?php

    class App{
        public function __construct(){
            
            $url =$_GET['url'];
            $url=explode('/',$url);
            $archivo_controller = 'controllers/'.$url[1];
            $error_report='controllers/error.php';

            require_once($error_report);
           
            if(file_exists($archivo_controller)){
                require_once( $archivo_controller);
                
                $separador =explode('.',$url[1]);

                $controller = new $separador[0]() ;

                if (isset($url[2])) {

                    if (method_exists($controller,"$url[2]")){

                        $controller->{$url[2]}();
    
                    }else{
                        $instance_error= new  Error_Class();
                        $instance_error->method_error($url[2]) ;
    
                    }
                }
               
            }else{
                
                $instance_error = new Error_Class();
            }
             
           
            
          
           

           

    }
}