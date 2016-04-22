<?php

  class GenerateurDuFormulaire{
  
      private $name;
      private $action;
      private $method;
      private $type;
      private $id;
      private $value;
      private $text;
      
      
      public function form($name,$action,$method){
      
        $this->name = $name;
        $this->action = $action;
        $this->method = $method;
        return "<form name = '{$this->name}' action = '{$this->action}' method = '{$this->method}'>";
      
      }
      
      public function endForm(){
      
        return "</form>";
      
      }
      
      public function input($type,$name,$id){
      
        $this->type = $type;
        $this->name = $name;
        $this->id = $id;
        return "<input type = '{$this->type}' name = '{$this->name}' id = '{$this->id}'>";
      
      }
      
      public function modifierInput($type,$name,$id,$value){
      
        return "<input type = '{$type}' name = '{$name}' id = '{$id}' value = '{$value}'>";
      
      }
      
      public function hidden($name,$value){
      
        return "<input type = 'hidden' name = '{$name}' value = '{$value}'>";
      
      }
      
      public function submit($name,$id,$value){
      
         $this->name = $name;
         $this->id = $id;
         $this->value = $value;
        return "<input type = 'submit' name = '{$this->name}' id = '{$this->id}' value = '{$this->value}'>";
      
      }
      
      public function reset($name,$id,$value){
      
        $this->name = $name;
        $this->id = $id;
        $this->value = $value;
        return "<input type = 'reset' name = '{$this->name}' id = '{$this->id}' value = '{$this->value}'>";
        
      }
      
      public function select($name,$id){
      
        $this->name = $name;
        $this->id = $id;
        return "<select name = '{$this->name}' id = '{$this->id}'>";
        
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
      
        return "<textArea name = '{$name}' id = '{$id}'></textArea>";
      
      }
      
      public function modifierTextArea($name,$id,$value){
      
        return "<textarea name = '{$name}' id = '{$id}'>{$value}</textarea>";
      
      }
      
  }

?>