<?php

session_start();

$_SESSION['nature'] = 'recruteur';

?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src = 'js/jquery.js'></script>
  <script src = '/FrameworkBootstrap\js\bootstrap.min.js'></script>
  <script src = 'js/code.js'></script>
  <link rel="stylesheet" type ="text/css" href="FrameworkBootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type ="text/css" href="FrameworkBootstrap/css/font-awesome.min.css">
  <link rel="stylesheet" type ="text/css" href="FrameworkBootstrap/css/monStyle.css">
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
        <div class = 'background-header'><img class = 'img-responsive' src = 'img/headerInscription.jpg'></div>
      </div>
    </div>
  </header>





<section class = 'container inscription'>

      <div class = 'row'>
          
        <div class = 'col-md-2 col-md-offset-5 text-center titre-inscription'>
          
          <h2>Inscription</h2>

        </div>

      </div>            

          <div class = 'container formulaire-inscription'>
              <h3 class = 'text-center titre-compte-candidat'>COMPTE ENTREPRISE</h3>
              <div class = 'row'>
            

                    <?php
      
                      require "Autoloader.php";
      
                      Autoloader::register();
        
                        $gdf = new GenerateurDuFormulaire();
                                      echo $gdf->form("f1","verifDonneesRecruteur.php","post");

                                      	echo "<div class = 'champs-inscription'>";
                                              echo "<div class = 'col-md-8 col-xs-12 col-md-offset-2'><b>Nom :*</b><span id = 'erreurNom'></span></div><div class = 'col-md-8 col-xs-12 col-md-offset-2'><span class = 'glyphicon glyphicon-user'></span><span class = 'champs-inscription'>".$gdf->input("text","nom","nom","form-control")."</span></div><br/><br/><br/>";
                                              echo "<div class = 'col-md-8 col-xs-12 col-md-offset-2'><b>Prenom :*</b><span id = 'erreurPrenom'></span></div><br/><div class = 'col-md-8 col-xs-12 col-md-offset-2'><span class = 'glyphicon glyphicon-user'></span>".$gdf->input("text","prenom","prenom","form-control")."</div><br/><br/><br/>";
                                              echo "<div class = 'col-md-8 col-xs-12 col-md-offset-2'><b>Email :*</b><span id = 'erreurEmail'></span></div><br/><div class = 'col-md-8 col-xs-12 col-md-offset-2'>".$gdf->input("text","Email","Email","form-control")."</div><br/><br/><br/>";
                                              echo "<div class = 'col-md-8 col-xs-12 col-md-offset-2'><b>Password* :</b><span id = 'erreurPassword'></span></div><br/><div class = 'col-md-8 col-xs-12 col-md-offset-2'>".$gdf->input("password","password","password","form-control")."</div><br/><br/><br/>";
                                              echo "<div class = 'col-md-8 col-xs-12 col-md-offset-2'><b>Comfirm Password* :</b><span id = 'erreurComfirmation'></span></div><br/><div class = 'col-md-8 col-xs-12 col-md-offset-2'>".$gdf->input("password","comfirmer","comfirmer","form-control")."</div><br/><br/><br/>";
                                              echo $gdf->hidden("nature","recruteur")."<br/>";
                                              echo "<div class = 'text-center'>".$gdf->submit("inscription","inscription","sign in","btn btn-default")."</div>";

                                        echo "</div>";

                                     echo $gdf->endForm();
                            
                    ?>
              </div>
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