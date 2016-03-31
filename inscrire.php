<!DOCTYPE html>
<html>
<head>
<script src = 'js/jquery.js'></script>
<script src = 'js/code.js'></script>
</head>
<body>
<section>
  <form name = 'f1' action = 'verif_donnees.php' method = 'post'>
   <b>Entrer votre nom* : </b> <input type 'text' name = 'nom' id = 'nom'><span id = 'erreurNom'></span><br/><br/>
    <b>Entrer votre prenom* : </b><input type = 'text' name = 'prenom' id = 'prenom'><span id = 'erreurPrenom'></span><br/><br/>
    <b>Entrer votre date de naissance* : </b><input type = 'text' name = 'dateNaiss' id = 'dateNaiss'><span id = 'erreurDateNaiss'></span><br/><br/>
    <b>Choisir un nom d'utilisateur* : </b><input type = 'text' name = 'login' id = 'login'><span id = 'erreurLogin'></span><br/><br/>
    <b>Choisir une mot de passe* : </b><input type = 'password' name = 'password' id = 'password'><span id = 'erreurPassword'></span><br/><br/>
    <b>Comfirmer votre mot de passe* : </b><input type = 'password' name = 'comfirmation' id = 'comfirmation'><span id = 'erreurComfirmation'></span><br/><br/>
    <b>Vous allez inscrire en tant que* : </b><select name = 'nature' id = 'nature'>
      <option value = '0'></option>
      <option value = 'condidat'>Condidat</option>
      <option value = 'recruteur'>Recruteur</option>
    </select><span id = 'erreurNature'></span><br/><br/>
    <input type = 'submit' name = 'inscrire' id = 'inscrire' value = "s'inscrire">
    <input type = 'reset' name = 'annuler' id = 'annuler' value = 'annuler'><br/><br/>
    
  </form>
</section>
</body>
</html>