<!DOCTYPE html>
<html>
<head>
<script src = 'js/js-jquery-1.7.2.min.js'></script>
<script src = 'js/code.js'></script>
<link rel="stylesheet" type ="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<section class = 'container'>


                <?php
      
                      require "Autoloader.php";
      
                      Autoloader::register();
        
                        $gdf = new GenerateurDuFormulaire();
        
                            echo $gdf->form("f1","verifDonnees.php","post");
          
                                  echo "<b class='span3'>Entrer votre nom* : </b>".$gdf->input("text","nom","nom")."<span id = 'erreurNom'></span><br/><br/>";
                                  echo "<b class='span3'>Entrer votre prenom* : </b>".$gdf->input("text","prenom","prenom")."<span id = 'erreurPrenom'></span><br/><br/>";
                                  echo "<b class='span3'>Entrer votre date de naissance* : </b>".$gdf->input("text","dateNaiss","dateNaiss")."<span id = 'erreurDateNaiss'></span><br/><br/>";
                                  echo "<b class='span3'>Choisir un nom d'utilisateur* : </b>".$gdf->input("text","login","login")."<span id = 'erreurLogin'></span><br/><br/>";
                                  echo "<b class='span3'>Choisir une mot de passe* : </b>".$gdf->input("password","password","password")."<span id = 'erreurPassword'></span><br/><br/>";
                                  echo "<b class='span3'>Comfirmer votre mot de passe* : </b>".$gdf->input("password","comfirmer","comfirmer")."<span id = 'erreurComfirmation'></span><br/><br/>";
                                  echo "<b class='span3'>Vous allez inscrire en tant que* : </b>";
            
                                  echo $gdf->select("nature","nature");
        
                                        echo $gdf->option(0,"");
                                        echo $gdf->option("candidat","Candidat");
                                        echo $gdf->option("recruteur","Recruteur");
              
                                  echo $gdf->endSelect()."<span id = 'erreurNature'></span><br/><br/>";
              
                                  echo $gdf->submit("inscrire","inscrire","sinscrire")." ";
                                  echo $gdf->reset("annuler","annuler","annuler")."<br/><br/>";
            
            
                            echo $gdf->endForm();
          
          
    ?>
            
</section>
</body>
</html>