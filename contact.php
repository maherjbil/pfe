<?php

session_start();

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
        <div class = 'background-header'><img class = 'img-responsive' src = 'img/headerContactf.jpg'></div>
      </div>
    </div>
  </header>

  	<div class = 'row'>
  				
  			<div class = 'col-md-2 col-md-offset-5 text-center titre-page-contact'>
  				
  				<h2>Contact</h2>

  			</div>

  	</div>		

  			

     <section class = 'container contact'>
      
        	<div class = 'formulaire col-md-8 col-xs-12 col-md-offset-2'>
        		
        			<div class = 'text-center'><h4>TU PEUX NOUS CONTACTER VIA LES RESEAUX SOCIAUX</h4></div>
        			<div class = 'ou text-center'><p>ou</p></div>
        			<div class = 'text-center'><h4>NOUS ECRIRE AVEC CE FORMULAIRE</h4></div>

        			<?php

        				require "Autoloader.php";

        				Autoloader::register();

        				$gdf = new GenerateurDuFormulaire();

        				if(!isset($_SESSION['login']) && !isset($_SESSION['password'])){

        						header("location:connexion.php?result=false");

        				}
        				else{

        				echo $gdf->form("f1","envoieMessage.php","post");
                                              echo "<div class = 'col-md-8 col-xs-12 col-md-offset-2'><b>EMAIL :*</b><span id = 'erreurEmail'></span></div><br/><div class = 'col-md-8 col-xs-12 col-md-offset-2 champs-formulaire-contact'><span class = 'glyphicon glyphicon-user'></span>".$gdf->input("text","Email","Email","form-control")."</div><br/><br/><br/>";

                                              echo "<div class = 'col-md-8 col-xs-12 col-md-offset-2'><b>TITRE :*</b><span id = 'erreurTitre'></span></div><br/><div class = 'col-md-8 col-xs-12 col-md-offset-2 champs-formulaire-contact'><span class = 'glyphicon glyphicon-user'></span>".$gdf->input("text","titreFormulaireContact","titreFormulaireContact","form-control")."</div><br/><br/><br/>";
                                              
                                              echo "<div class = 'col-md-8 col-xs-12 col-md-offset-2'><b>Message* :</b><span id = 'erreurMessage'></span></div><br/><div class = 'col-md-8 col-xs-12 col-md-offset-2 champs-formulaire-contact'>".$gdf->textArea("message","message")."</div><br/><br/>";


                                              if(isset($_POST['nature'])){ echo $gdf->hidden("nature",$_POST['nature'])."<br/><br/>"; }
                                              if(isset($_POST['idCandidat'])){ echo $gdf->hidden("idCandidat",$_POST['idCandidat'])."<br/><br/>"; }
                                              if(isset($_POST['idRecruteur'])){ echo $gdf->hidden("idRecruteur",$_POST['idRecruteur'])."<br/><br/>"; }
                                              if(isset($_GET['nature'])){ echo $gdf->hidden("nature",$_GET['nature'])."<br/><br/>"; }
                                              if(isset($_GET['idCandidat'])){ echo $gdf->hidden("idCandidat",$_GET['idCandidat'])."<br/><br/>"; }
                                              if(isset($_GET['idRecruteur'])){ echo $gdf->hidden("idRecruteur",$_GET['idRecruteur'])."<br/><br/>"; }
                                              echo "<div class = 'row'><div class = 'col-md-2 col-md-offset-5 btn'>".$gdf->submit("contacter","contacter","Envoyer","btn btn-default")."</div></div><br/>";
                        echo $gdf->endForm();



                        echo "<div class = 'row'><div class = 'col-md-4 col-md-offset-4 text-center'>";
                        
			                        if(isset($_GET['reponse'])){

			                        	if($_GET['reponse'] == true){

			                        		echo "<b>vos donnees ont ete envoyer</b>";

			                        	}
			                        	else{

			                        		echo "<b>echec de l'envoie du donnees</b>";

			                        	}
			                        }

			        	echo "</div></div>";

			        }
			        
			        ?>



        	</div>
      
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