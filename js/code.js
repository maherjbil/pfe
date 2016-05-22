//code de la page inscription 
$(document).ready(function(){
  var ok = true;
  var ok1 = true;
  var completerInscription = true;
  var contact = true;
  var postulation = true;
  var envoieCV = true;
  var publierAnnonce = true;
  $("#inscription").click(function(){
    if($("#nom").val() == ''){
      $("#nom").css("background-color","red");
      $("#erreurNom").html("champs obligatoire");
      ok = false;
    }
    if($("#prenom").val() == ''){
      $("#prenom").css("background-color","red");
      $("#erreurPrenom").html("champs obligatoire");
      ok = false;
    }
    if($("#Email").val() == ''){
      $("#Email").css("background-color","red");
      $("#erreurEmail").html("adresse email obligatoire");
      ok = false;
    }
    if($("#password").val() == ''){
      $("#password").css("background-color","red");
      $("#erreurPassword").html("champs obligatoire");
      ok = false;
    }
    if($("#comfirmer").val() == ''){
      $("#comfirmer").css("background-color","red");
      $("#erreurComfirmation").html("obligatoire");
      ok = false;
    }
    
    var login = $("#Email").val();
    
    if($("#Email").val() != ""){
    
      if(login.indexOf('@') == -1){
      
          $("#erreurEmail").html("l'email doit contenir un arrobase");
      
          ok = false;
      
      }
    }
    
    if(login != "" && login.indexOf('@') == 0){
    
        if(login.indexOf(' ') == 0){
        
            $("#erreurEmail").html("l'email ne doit contenir aucun espace ");
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
    if($("#acceptRules").prop("checked") != true){
    
        $("#erreurRules").html("obligatoire");
    
    }
    
    return ok;
    
  });
  
  $("#connexion").click(function(){
  
      if($("#login").val() == ''){
      
          $("#login").css("background-color","red");
          $("#erreurLogin").html('invalide !');
          ok1 = false;
      
      }
      if($("#mdp").val() == ''){
      
          $("#mdp").css("background-color","red");
          $("#erreurMdp").html('invalide !');
          ok1 = false;
      
      }
      
      return ok1;
  
  });
  
  $("#nom").focus(function(){
  
      $("#nom").css("background-color","white");
      $("#erreurNom").html("");
      ok = true;
  
  });

  $("#prenom").focus(function(){

      $("#prenom").css("background-color","white");
      $("#erreurPrenom").html("");

  });
  
  $("#Email").focus(function(){
  
      $("#Email").css("background-color","white");
      $("#erreurEmail").html("");
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
  $("#acceptRules").focus(function(){
  
      $("#erreurRules").html("");
  
  });
  $("#login").focus(function(){
  
      $("#login").css("background-color","white");
      $("#erreurLogin").html("");
  
  });
  $("#mdp").focus(function(){
  
      $("#mdp").css("background-color","white");
      $("#erreurMdp").html("");
  
  });


  //code de la page completerInscription

  $("#envoyer").click(function(){


      if($("#dateNaiss").val() == ''){

          $("#dateNaiss").css("background-color","red");
          $("#erreurDateNaiss").html("Veuillez introduire votre date de naissance").css("color","red");
          completerInscription = false;

      }
      if($("#domaine").val() == '0'){

          $("#domaine").css("background-color","red");
          $("#erreurDomaine").html("Veuillez selectionner votre domaine d'activite").css("color","red");
          completerInscription = false;

      }
      if($("#niveau").val() == '0'){

          $("#niveau").css("background-color","red");
          $("#erreurNiveau").html("veuillez determiner votre niveau d'education").css("color","red");
          completerInscription = false;

      }
      if($("#specialite").val() == '0'){

          $("#specialite").css("background-color","red");
          $("#erreurSpecialite").html("veuillez selectionner votre specialite").css("color","red");
          completerInscription = false;
      }
      if($("#pays").val() == ''){

          $("#pays").css("background-color","red");
          $("#erreurPays").html("veuillez entrer le nom votre pays").css("color","red");
          completerInscription = false;

      }
      if($("#region").val() == ''){

          $("#region").css("background-color","red");
          $("#erreurRegion").html("veuillez entrer le nom votre region").css("color","red");
          completerInscription = false;

      }
      if($("#ville").val() == ''){

          $("#ville").css("background-color","red");
          $("#erreurVille").html("veuillez entrer le nom votre ville").css("color","red");
          completerInscription = false;

      }
      if($("#numeroTelephone").val() == ''){

          $("#numeroTelephone").css("background-color","red");
          $("#erreurNumTel").html("veuillez saisirvotre numero de telephone").css("color","red");
          completerInscription = false;

      }

      return completerInscription;


  });

  $("#dateNaiss").focus(function(){

  		$("#dateNaiss").css("background-color","white");
  		$("#erreurDateNaiss").html("");
  		completerInscription = true;

  });
  $("#domaine").focus(function(){

  		$("#domaine").css("background-color","white");
  		$("#erreurDomaine").html("");
  		completerInscription = true;

  });
  $("#niveau").focus(function(){

  		$("#niveau").css("background-color","white");
  		$("#erreurNiveau").html("");
  		completerInscription = true;

  });
  $("#specialite").focus(function(){

  		$("#specialite").css("background-color","white");
  		$("#erreurSpecialite").html("");
  		completerInscription = true;

  });
  $("#pays").focus(function(){

  		$("#pays").css("background-color","white");
  		$("#erreurPays").html("");
  		completerInscription = true;

  });
  $("#region").focus(function(){

  		$("#region").css("background-color","white");
  		$("#erreurRegion").html("");
  		completerInscription = true;

  });
  $("#ville").focus(function(){

  		$("#ville").css("background-color","white");
  		$("#erreurVille").html("");
  		completerInscription = true;

  });
  $("#numeroTelephone").focus(function(){

  		$("#numeroTelephone").css("background-color","white");
  		$("#erreurNumTel").html("");
  		completerInscription = true;

  });

  //debut du code de la page contact.php

  $("#contacter").click(function(){

      if($("#Email").val() == ''){

          $("#Email").css("background-color","red");
          $("#erreurEmail").html("veuillez saisir votre adresse email");
          contact = false;

      }
      if($("#titreFormulaireContact").val() == ''){

          $("#titreFormulaireContact").css("background-color","red");
          $("#erreurTitre").html("veuillez saisir votre adresse email");
          contact = false;

      }
      if($("#message").val() == ''){

          $("#message").css("background-color","red");
          $("#erreurMessage").html("veuillez saisir votre adresse email");
          contact = false;

      }

      return contact;

  });

  $("#Email").focus(function(){

      $("#Email").css("background-color","white");
          $("#erreurEmail").html("");
          contact = true;

  });
  $("#titreFormulaireContact").focus(function(){

      $("#titreFormulaireContact").css("background-color","white");
          $("#erreurTitre").html("");
          contact = true;

  });
  $("#message").focus(function(){

      $("#message").css("background-color","white");
          $("#erreurMessage").html("");
          contact = true;

  });

  //fin de la page contact.php

  //debut de la page formulaireDePostulation.php

  $("#envoyer").click(function(){

  		if($("#lettreDeMotivation").val() == ''){

  				$("#erreurLettreDeMotivation").html("veuillez remplir le contenu de la lettre de motivation").css("color","red");
  				postulation = false;

  		}
  		if($("#photo").val() == ''){

  				$("#erreurPhoto").html("veuillez regoindre un photo ou deposer un CV").css("color","red");
  				postulation = false;

  		}

  		return postulation;

  });
  $("#lettreDeMotivation").focus(function(){

  		postulation = true;

  });
  $("#photo").click(function(){

  		postulation = true;

  });

  //fin de la page formulaireDePostulation.php
  
  //debut de la page formulaireDepublicationDeCV.php

  $("#envoyerCV").click(function(){

      if($("#cv").val() == ''){

          $("#erreurCV").html("Vous devez choisir un fichier ou un dossier").css("color","red");
          envoieCV = false;

      }

      return envoieCV;

  });
  $("#cv").focus(function(){

      $("#erreurCV").html("");
      envoieCV = true;

  });

  //fin de la page formulaireDePublicationDeCV.php

  //debut de la page formulaireAjoutAnnonce

  $("#publierAnnonce").click(function(){

      if($("#titreAnnonce").val() == ''){

          $("#erreurTitreAnnonce").html("veuillez saisir le titre de l'annonce").css("color","red");
          publierAnnonce = false;

      }
      else{

        var titre = $("#titreAnnonce").val();

          if(titre.indexOf("'") == 0){

              $("#erreurTitreAnnonce").html("le caractere apostrophe est interdit").css("color","red");
              publierAnnonce = false;

          }

      }
      if($("#contenuAnnonce").val() == ''){

          $("#erreurContenuAnnonce").html("veuillez ridiger le contenu de votre annonce").css("color","red");
          publierAnnonce = false;

      }
      else{

          var contenu = $("#contenuAnnonce").val();

          if(contenu.indexOf("'") == 0){

              $("#erreurContenuAnnonce").html("le caractere apostrophe est interdit").css("color","red");
              publierAnnonce = false;

          }

      }

      return publierAnnonce;

  });
  $("#titreAnnonce").focus(function(){

      $("#erreurTitreAnnonce").html("");
      publierAnnonce = true;

  });
  $("#contenuAnnonce").focus(function(){

      $("#erreurContenuAnnonce").html("");
      publierAnnonce = true;

  });


  //fin de la page formulaireAjoutAnnonce
  
  });


