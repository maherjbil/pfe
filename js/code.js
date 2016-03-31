$document.ready(function(){
  $("#inscrire").click(function(){
    if($("#nom").val() == ''){
      $("#nom").css("background-color","red");
      $("#erreurNom").html("Veuillez introduire votre nom");
      return false;
    }
    if($("#prenom").val() == ''){
      $("#prenom").css("background-color","red");
      $("#erreurPrenom").html("Veuillez introduire votre date de naissance");
    }
    if($("#dateNaiss").val() == ''){
      $("#dateNaiss").css("background-color","red");
      $("#erreurDateNaiss").html("Veuillez saisir votre date de naissance");
    }
    if($("#login").val() == ''){
      $("#login").css("background-color","red");
      $("#erreurLogin").html("Veuillez choisir un nom d'utilisateur");
    }
    if($("#password").val() == ''){
      $("#password").css("background-color","red");
      $("#erreurDateNaiss").html("Vous devez choisir un mot de passe");
    }
    if($("#comfirmer").val() == ''){
      $("#comfirmer").css("background-color","red");
      $("#erreurComfirmer").html("Vous devez comfirmer votre mot de passe");
    }
    if($("#nature").val() == 0){
      $("#nature").css("background-color","red");
      $("erreurNature").html("Vous devez determiner le type de votre inscription");
    }
  });
  
  });