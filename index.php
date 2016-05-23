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


<nav class = 'nav navbar-fixed-top' role = 'navigation' style = 'border-bottom:1px solid #d5d4d4'>
  
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

<section class = 'container-fluid afficherToutesLesAnnonces'>


        <?php include("LesObjets/ObjetDeAfficherToutesLesAnnonces.php"); ?>


</section>


<section class = 'infinity-job-statistiques'>

      <div class = 'container-fluid'>

            <div class = 'titre-infinity-job-statistiques text-center'><h1>Infinity job statistiques</h1></div>

              <div class = 'row'>

                  <div class = 'col-md-offset-1 col-md-2 stat' >

                    <div class = 'text-center'><p class = 'lead'><b>653</b></p><i class = 'fa fa-heart fa-2x'></i></div><p style = 'margin-left:15px'><b>EMPLOI REMPLI</b></p>

                  </div>

                  <div class = 'col-md-2 stat'>

                    <div class = 'text-center'><p class = 'lead'><b>203</b></p><i class = 'fa fa-paste fa-2x'></i></div><p style = 'margin-left:38px'><b>PROFILS</b></p>

                  </div>

                  <div class = 'col-md-2 stat'>

                    <div class = 'text-center'><p class = 'lead'><b>120</b></p><i class = 'fa fa-briefcase fa-2x'></i></div><p style = 'margin-left:40px'><b>EMPLOI</b></p>

                  </div>

                  <div class = 'col-md-2 stat'>

                    <div class = 'text-center'><p class = 'lead'><b>5,486</b></p><i class = 'fa fa-building fa-2x'/></i></div><p style = 'margin-left:-15px'>
                    <b>ENTREPRISES MEMBRES</b></p>

                  </div>

                  <div class = 'col-md-2 stat'>
 
                    <div class = 'text-center'><p class = 'lead'><b>7,566</b></p><i class = 'fa fa-user fa-2x'></i></div><p style = 'margin-left:25px'><b>CANDIDATS</b></p>

                  </div>

                  <div class = 'row formulaire-bas'>
                    
                    <div class = 'col-md-6 col-md-offset-3'>
                      
                        <h1 style = 'margin-left:32px;margin-bottom:0px'>Abonnez-vous a notre Newsletter</h1>
                        <div class = 'col-md-10'><input type = 'text' name = 'abonnement' id = 'abonnement' class = 'form-control' placeholder="Adresse e-mail" style = 'height:50px;width:550px;margin-top:0px'></div><div class = 'col-md-2'><button class = 'btn btn-default' style = 'border:0px;margin-top:8px;background:transparent;margin-left:-50px'><img src = 'img\Calque2.png'></button></div>

                    </div>

                  </div>

            </div>

    </div>


</section>


<section class = 'infinity-job-applications'>

      <div class = 'container-fluid'>

              <div class = 'row'>

                  <div class = 'col-md-5'>
                    
                      <img class = 'center-block img-responsive' src = 'img\mobile.png'/>

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