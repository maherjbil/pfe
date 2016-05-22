

<?php

  class GenerateurDuFormulaire{
  
      private $name;
      private $action;
      private $method;
      private $type;
      private $id;
      private $value;
      private $text;
      private $class;
      
      
      public function form($name,$action,$method){
      
        $this->name = $name;
        $this->action = $action;
        $this->method = $method;
        return "<form name = '{$this->name}' action = '{$this->action}' method = '{$this->method}'>";
      
      }
      
      public function endForm(){
      
        return "</form>";
      
      }
      
      public function input($type,$name,$id,$class){
      
        $this->type = $type;
        $this->name = $name;
        $this->id = $id;
        $this->class = $class;
        return "<input class = '{$this->class}' type = '{$this->type}' name = '{$this->name}' id = '{$this->id}'>";
      
      }
      
      public function modifierInput($type,$name,$id,$value){
      
        return "<input type = '{$type}' name = '{$name}' id = '{$id}' value = '{$value}'>";
      
      }

      public function inputFile($name,$id){


        return "<input type = 'file' name = '{$name}' id = '{$id}'>";

      }
      
      public function hidden($name,$value){
      
        return "<input type = 'hidden' name = '{$name}' value = '{$value}'>";
      
      }
      
      public function submit($name,$id,$value,$class){
      
         $this->name = $name;
         $this->id = $id;
         $this->value = $value;
         $this->class = $class;
        return "<input class = '{$this->class}' type = 'submit' name = '{$this->name}' id = '{$this->id}' value = '{$this->value}'>";
      
      }
      
      public function reset($name,$id,$value){
      
        $this->name = $name;
        $this->id = $id;
        $this->value = $value;
        return "<input class = 'btn btn-danger' type = 'reset' name = '{$this->name}' id = '{$this->id}' value = '{$this->value}'>";
        
      }
      
      public function select($name,$id){
      
        $this->name = $name;
        $this->id = $id;
        return "<select name = '{$this->name}' id = '{$this->id}' class = 'form-control'>";
        
      }
      
      public function option($value,$text){
        
        $this->value = $value;
        $this->text = $text;
        return "<option value = '{$this->value}'>{$this->text}</option>";
      
      }
      
      public function endSelect(){
      
        return "</select>";
      
      }
      
      public function textArea($name,$id){
      
        return "<textArea name = '{$name}' id = '{$id}' class = 'form-control'></textArea>";
      
      }
      
      public function modifierTextArea($name,$id,$value){
      
        return "<textarea name = '{$name}' id = '{$id}'>{$value}</textarea>";
      
      }
      public function checkbox($name,$id,$value){
      
            return "<input type = 'checkbox' name = '{$name}' id = '{$id}' value = '{$value}'>";
      
      }
      
  }

?>