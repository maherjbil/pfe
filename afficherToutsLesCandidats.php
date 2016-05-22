<?php

session_start();

      if(isset($_POST['idCandidat'])){ $_SESSION['idCandidat'] = $_POST['idCandidat']; }

?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel = 'stylesheet' type = 'text/css' href = 'FrameworkBootstrap/css/bootstrap.min.css'>
    <link rel = 'stylesheet' type = 'text/css' href = 'FrameworkBootstrap/css/font-awesome.min.css'>
    <link rel = 'stylesheet' type = 'text/css' href = 'FrameworkBootstrap/css/monStyle.css'>
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
        <div class = 'background-header'>

        	<img class = 'img-responsive' src = 'img/offref.jpg'><?php 

                              														        	require "Autoloader.php";

                              														        	Autoloader::register();

                              														        	$annonces = new Annonces($_SESSION['id'],$_SESSION['domaine'],$_SESSION['nature']);
                              														  
                              														  			if(isset($_SESSION['idCandidat'])){$annonces->setIdCandidat($_SESSION['idCandidat']);}

                              														        	$gdf = new GenerateurDuFormulaire();

                              														        		echo "<div class = 'barre-de-recherche'>".$gdf->form("f13","pageDeRecherche.php","get")."<div class = 'col-md-10 col-md-offset-1 formulaire-recherche-personnalisee'><div class = 'col-md-4'><input class = 'form-control' col-md-4 type = 'text' name = 'motCle' id = 'motCle' placeholder = 'mot cle...'></div><div class = 'col-md-4'>".$gdf->select("categories","categories").$gdf->option("toutesLesCategories","toutes les categories").$gdf->endSelect()."</div><div class = 'col-md-2'>".$gdf->submit("recherchePersonnalisee","recherchePersonnalisee","rechercher","btn btn-default")."</div>".$gdf->endForm()."</div></div>"; 
                              														      	?>

        </div>

      </div>
    </div>
</header>


<div class = 'row'>
  				
  			<div class = 'col-md-2 col-md-offset-5 text-center titre-page-rechercher-annonce-et-candidature'>
  				
  				<h2>Resultats</h2>

  			</div>

</div>


    
<section class = 'container resultat-de-recherche'>
      
      <?php include("LesObjets/ObjetDeAfficherToutsLesCandidats.php"); ?>
      
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

        <div class = 'col-md-3 col-sm-6 col-xs-12 text-center'>

            <div class = 'suivez-nous'><h3>SUIVEZ NOUS</h3></div>

            <div class = 'fonts'>
              
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

            </div>
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
