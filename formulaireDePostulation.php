<?php

session_start();

if(isset($_POST['idAnnonces']) && isset($_POST['idCandidat']) && isset($_POST['id']) && isset($_POST['domaine']) && isset($_POST['nature'])){

      $_SESSION['idAnnonces'] = $_POST['idAnnonces'];
      $_SESSION['idCandidat'] = $_POST['idCandidat'];
      $_SESSION['idRecruteur'] = $_POST['id'];
      $_SESSION['domaine'] = $_POST['domaine'];
      $_SESSION['nature'] = $_POST['nature'];

}


?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type ="text/css" href="FrameworkBootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type ="text/css" href="FrameworkBootstrap/css/font-awesome.min.css">
    <link rel="stylesheet" type ="text/css" href="FrameworkBootstrap/css/monStyle.css">
    <script src = 'js/jquery.js'></script>
    <script src = 'js/code.js'></script>
</head>
<body>


<nav class = 'nav navbar-fixed-top' role = 'navigation'>
  
    <div class="navbar-header">

      <div class="container">

          <div class = 'row'>




                              <div class = 'col-md-1 col-md-offset-2'>
                                       
                                            <button type="button" class = 'toggle btn btn-Link'>
                                                  <span class="sr-only">Toggle navigation</span>
                                                  <span class="icon-bar"></span>
                                                  <span class="icon-bar"></span>
                                                  <span class="icon-bar"></span>
                                            </button>

                              </div>





                              <div class = 'col-md-1 col-md-offset-3'>           
                                      <div class = 'logo'><a href="index.php"><img src = 'img/logo.png'></a></div>
                              </div>





                                      
                              <div class = 'col-md-3 col-md-offset-2'>
                                
                                          <div class="collapse navbar-collapse">
                                                <ul class="nav navbar-nav navbar-right">
                                                    <li class="active"><a href="InscriptionEmployer.php">Employer</a></li>
                                                    <li><a href="InscriptionEntreprise.php">Entreprise</a></li>
                                                 </ul>
                                          </div><!--/.nav-collapse -->

                              </div>
            
          </div>
          
          
      </div>

    </div>

</nav>


<header class = 'container-fluid'>
    <div class = 'row'>
      <div col-md-12>
        <div class = 'background-header'><img class = 'img-responsive' src = 'img/headerAnnonce.jpg'></div>
      </div>
    </div>
  </header>


  	<div class = 'row'>
  				
  			<div class = 'col-md-2 col-md-offset-5 text-center titre-page-postulation'>
  				
  				<h2>Postulation</h2>

  			</div>

  	</div>

<section class = 'container postulation'>

<?php

  require "Autoloader.php";
  
  Autoloader::register();
  
  
  $gdf = new GenerateurDuFormulaire();

  if(!isset($_SESSION['login']) && !isset($_SESSION['password'])){

      header("location:connexion.php?result=false");

  }

      echo $gdf->form("f27","postuler.php","post");

      	echo "<div class = 'col-md-8 col-xs-12 col-md-offset-2 formulaire-postulation'>";
        
          echo "<h4>Veuillez rediger une lettre de motivation : </h4><span id = 'erreurLettreDeMotivation'></span>";

          if(isset($_GET['reponse'])){

              if($_GET['reponse'] == true){

                    echo "<b>vos donnees ont ete envoyees</b>";

              }
              else{ 

                    echo "<b>l'envoie des donnees a ete echoue</b>";

              }
          }
          echo $gdf->textArea("lettreDeMotivation","lettreDeMotivation")."<br/>";
          echo $gdf->hidden("idAnnonces",$_SESSION['idAnnonces']);
          echo $gdf->hidden("idCandidat",$_SESSION['id']);// ID de l'internaute
          echo $gdf->hidden("idRecruteur",$_SESSION['idRecruteur']);//ID de l'annonceur
          echo $gdf->hidden("domaine",$_SESSION['domaine']);
          echo $gdf->hidden("nature",$_SESSION['nature']);

          echo "<div><input class = 'center-block' type = 'file' name = 'photo' id = 'photo'><span id = 'erreurPhoto'></span></div><br/><br/>";
          echo "<div class = 'text-center btn-postulation'>".$gdf->submit("envoyer","envoyer","envoyer","btn btn-default")."</div>";

        echo "</div>";
   

?>

</section>


<footer class = 'container-fluid'>
  <div class = 'container'>
  
    <div class = 'row'>
      
        <div class = 'col-md-3 col-sm-6 col-xs-12'>

            <h3>A PROPOS DE INFINITY JOB</h3>
          
            <ul class = 'list-unstyled'>
              
                  <li><a href = '#'>L'esprit Jobillico</a></li>
                  <li><a href = '#'>Carrieres</a></li>
                  <li><a href = '#'>Partenaires corporatifs</a></li>
                  <li><a href = '#'>Sites partenaires</a></li>

            </ul>

        </div>

         <div class = 'col-md-3 col-sm-6 col-xs-12'>

            <h3>EMPLOI PAR VILLE</h3>
          
            <ul class = 'list-unstyled'>
              
                  <li><a href = '#'>Emploi a Toronto</a></li>
                  <li><a href = '#'>Emploi a Montreal</a></li>
                  <li><a href = '#'>Emploi a Missisauga</a></li>
                  <li><a href = '#'>Emploi a Quebec</a></li>
                  <li><a href = '#'>Emploi a Laval</a></li>
                  <li><a href = '#'>Voir plus d'emploi <br/> par ville ></a></li>

            </ul>

        </div>

         <div class = 'col-md-3 col-sm-6 col-xs-12'>

            <h3>EMPLOI PAR PRFESSION</h3>
          
            <ul class = 'list-unstyled'>
              
                  <li><a href = '#'>Emploi en vente</a></li>
                  <li><a href = '#'>Emploi en assurance</a></li>
                  <li><a href = '#'>Emploi en comptabilite</a></li>
                  <li><a href = '#'>Emploi en transport</a></li>
                  <li><a href = '#'>Voir plus d'emploi <br/> par profession ></a></li>

            </ul>

        </div>

        <div class = 'col-md-3 col-sm-6 col-xs-12'>

            <h3>SUIVEZ NOUS</h3>

            <a href = 'http://www.facebook.com'>
               
                  <span class = 'fa-stack fa-lg'>
                    <i class = 'fa fa-square-o fa-stack-2x'></i>
                    <i class = 'fa fa-facebook fa-stack-1x'></i>
                  </span>

              </a>

              <a href = 'http://www.google.com'>
                
                  <span class = 'fa-stack fa-lg'>
                    <i class = 'fa fa-square-o fa-stack-2x'></i>
                    <i class = 'fa fa-google-plus fa-stack-1x'></i>
                  </span>

              </a>

              <a href = 'http://www.linkedin.com'>
                
                  <span class = 'fa-stack fa-lg'>
                    <i class = 'fa fa-square-o fa-stack-2x'></i>
                    <i class = 'fa fa-linkedin fa-stack-1x'></i>
                  </span>

              </a>

            <div class = ''><a href = 'index.php'><img src = 'img/logo.png'></a></div>

        </div>

    </div>
  </div>

  <div class = 'bande text-center'>
    
        <p>© 2016 -Infinityjob -Tous droits réservés by Chbak Rahma</p>

  </div>

</footer>


</body>
</html>
