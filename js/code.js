$(document).ready(function(){
  var ok = true;
  $("#inscrire").click(function(){
    if($("#nom").val() == ''){
      $("#nom").css("background-color","red");
      $("#erreurNom").html("Veuillez introduire votre nom");
      ok = false;
    }
    if($("#prenom").val() == ''){
      $("#prenom").css("background-color","red");
      $("#erreurPrenom").html("Veuillez introduire votre prenom");
      ok = false;
    }
    if($("#dateNaiss").val() == ''){
      $("#dateNaiss").css("background-color","red");
      $("#erreurDateNaiss").html("Veuillez saisir votre date de naissance");
      ok = false;
    }
    if($("#login").val() == ''){
      $("#login").css("background-color","red");
      $("#erreurLogin").html("Veuillez choisir un nom d'utilisateur");
      ok = false;
    }
    if($("#password").val() == ''){
      $("#password").css("background-color","red");
      $("#erreurPassword").html("Vous devez choisir un mot de passe");
      ok = false;
    }
    if($("#comfirmer").val() == ''){
      $("#comfirmer").css("background-color","red");
      $("#erreurComfirmation").html("Vous devez comfirmer votre mot de passe");
      ok = false;
    }
    if($("#nature").val() == 0){
      $("#nature").css("background-color","red");
      $("#erreurNature").html("Vous devez determiner le type de votre inscription");
      ok = false;
    }
    
    var login = $("#login").val();
    
    if($("#login").val() != ""){
    
      if(login.indexOf('@') == -1){
      
          $("#erreurLogin").html("l'email doit contenir un arrobase");
      
          ok = false;
      
      }
    }
    
    if(login != "" && login.indexOf('@') == 0){
    
        if(login.indexOf(' ') == 0){
        
            $("#erreurLogin").html("l'email ne doit contenir aucun espace ");
            ok = false;
        
        }
    
    }
    
    var password = $("#password").val();
    
    if(password.length<8){
    
        $("#erreurPassword").html("mot de passe faible");
        ok = false;
    
    }
    
    if($("#password").val() != $("#comfirmer").val()){
    
        $("#erreurPassword").html("le mot de passe et sa comfirmation doivent etre identiques");
        ok = false;
    
    }
    
    return ok;
    
  });
  
  $("#nom").focus(function(){
  
      $("#nom").css("background-color","white");
      $("#erreurNom").html("");
      ok = true;
  
  });
  
  $("#prenom").focus(function(){
  
      $("#prenom").css("background-color","white");
      $("#erreurPrenom").html("");
      ok = true;
  
  });
  
  $("#dateNaiss").focus(function(){
  
      $("#dateNaiss").css("background-color","white");
      $("#erreurDateNaiss").html("");
      ok = true;
  
  });
  
  $("#login").focus(function(){
  
      $("#login").css("background-color","white");
      $("#erreurLogin").html("");
      ok = true;
  
  });
  
  $("#password").focus(function(){
  
      $("#password").css("background","white");
      $("#erreurPassword").html("");
      ok = true;
  
  });
  
  $("#comfirmer").focus(function(){
  
      $("#comfirmer").css("background-color","white");
      $("#erreurComfirmation").html("");
      ok = true;
  
  });
  
  $("#nature").focus(function(){
  
      $("#nature").css("background-color","white");
      $("#erreurNature").html("");
      ok = true;
  
  });
  
  });