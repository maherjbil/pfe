 <?php
          require "Autoloader.php";
          
          Autoloader::register();
          
            $gdf = new GenerateurDuFormulaire();
            
              echo $gdf->form("f2","verifCompte.php","post");
            
                echo "Entrer votre nom d'utilisateur : ".$gdf->input("text","login","login","form-control")."<span id ='erreurLogin'></span><br/><br/>";
                echo "Entrer votre mot de passe : ".$gdf->input("password","password","password","form-control")."<span id = 'erreurPassword'></span><br/><br/>";
                echo $gdf->submit("connexion","connexion","se connecter","btn btn-default");
                
              echo $gdf->endForm();
      ?>