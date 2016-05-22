<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel = 'stylesheet' type = 'text/css' href = 'bootstrap/css/bootstrap-responsive.css'>
  <link rel = 'stylesheet' type = 'text/css' href = 'bootstrap/css/bootstrap.min.css'>
</head>
<body>
  <section class = 'container-fluid'>
    <form name = 'f3' action = 'verifCompte.php' method = 'post'>
        
        <?php 

        	include("LesObjets/ObjetDeConnexion.php"); 

        	if(isset($_GET['resultat'])){

        			if($_GET['resultat'] == 'false'){

        					echo "compte introuvable veuillez reessayer";

        			}

        	}

          if(isset($_GET['result'])){

              if($_GET['result'] == 'false'){

                  echo "veuillez s'authentifier <br/> ou <a href = 'inscriptionEmployer.php'>creer un compte</a> si vous n'etes pas encore abonner";

              }

          }

        ?>
    
    </form>
  </section>
</body>
</html>