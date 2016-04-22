class Email{
    
    private var email;
    
    public function Email(var email){
    
      this.email = email;
    
    }
    
    
    function verifArrobase(){
    
      if(this.email.indexOf('@') == -1){
      
          return false;
      
      }
      else{
      
        return true;
      
      }
    
    }
    }