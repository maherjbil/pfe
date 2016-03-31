<?php

  class Autoloader{
  
  
    public static function register(){
    
    
      spl_autoload_register(array(__class__,'autoload'));
    
    
    
    }
    public static function autoload($className){
    
      
      require "CLASS/".$className.".php";
    
    
    }
  
  }


?>