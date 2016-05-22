<?php

session_start();

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
        <div class = 'background-header'><img class = 'img-responsive' src = 'img/arriereFinale.jpg'></div>
      </div>
    </div>
  </header>

<section class = 'container afficherToutesLesAnnonces'>


        <?php include("LesObjets/ObjetDeAfficherToutesLesAnnonces.php"); ?>


</section>


<section class = 'infinity-job-statistiques text-center'>

      <div class = 'container'>

            <div class = 'titre-infinity-job-statistiques'><h1>Infinity job statistiques</h1></div>

              <div class = 'row'>

                  <div class = 'col-md-offset-1 col-md-2 stat'>

                    <div><p class = 'lead'><b>653</b></p><i class = 'fa fa-heart fa-3x'></i></div><p><b>EMPLOI REMPLI</b></p>

                  </div>

                  <div class = 'col-md-2 stat'>

                    <div><p class = 'lead'><b>653</b></p><i class = 'fa fa-heart fa-3x'></i></div><p><b>PROFILS</b></p>

                  </div>

                  <div class = 'col-md-2 stat'>

                    <div><p class = 'lead'><b>653</b></p><i class = 'glyphicon glyphicon-briefcase fa-3x'></i></div><p><b>EMPLOI</b></p>

                  </div>

                  <div class = 'col-md-2 stat'>

                    <div><p class = 'lead'><b>653</b></p><i class = 'fa fa-building fa-3x'></i></div><p>
                    <b>ENTREPRISES MEMBRES</b></p>

                  </div>

                  <div class = 'col-md-2 stat'>

                    <div><p class = 'lead'><b>653</b></p><i class = 'fa fa-user fa-3x'></i></div><p><b>CANDIDATS</b></p>

                  </div>

                  <div class = 'row formulaire-bas'>
                    
                    <div class = 'col-md-4 col-md-offset-4'>
                      
                        <h4>Abonnez-vous a notre Newsletter</h4>
                        <input type = 'text' name = 'abonnement' id = 'abonnement' class = 'form-control' placeholder="Adresse e-mail">

                    </div>

                  </div>

            </div>

    </div>


</section>


<section class = 'infinity-job-applications'>

      <div class = 'container'>

              <div class = 'row'>

                  <div class = 'col-md-5'>
                    
                      <img class = 'center-block img-responsive' src = 'img/telephones.png'/>

                  </div>

                  <div class = 'col-md-6'>
                      
                      <div class = 'titre-infinity-job-applications'><h1>Obtiendrez infinity job applications</h1></div>

                      <div class = 'paragraphes'>
                        
                            <p><i class = 'glyphicon glyphicon-ok'></i> Recevoir des notifications instantanees d'emploi</p>
                            <p><i class = 'glyphicon glyphicon-ok'></i> Appliquer directement de l'application de l'emploi</p>
                            <p><i class = 'glyphicon glyphicon-ok'></i> Enregistrer des emplois et des recherches</p>

                      </div>
                      
                      <div class = 'appStore-googlePlay text-center'>
                        
                            <img src = 'img/app_store.png'/>
                            <img src = 'img/googlePlay.png'/>

                      </div>   

                            

                  </div>

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
            <div><a href = 'index.php'><img src = 'img/logo.png'></a></div>

        </div>

    </div>
  </div>

  <div class = 'bande text-center'>
    
        <p>© 2016 -Infinityjob -Tous droits réservés by Chbak Rahma</p>

  </div>

</footer>


</body>
</html>