<?php

session_start();

    require "Autoloader.php";

    Autoloader::register();

    $compte = new Compte($_SESSION['nature']);
    
    $gdf = new GenerateurDuFormulaire();

    $compte->setId($_SESSION['id']);
    
    $compte->setDomaine($_SESSION['domaine']);

        if($compte->getNature() == 'candidat'){
        
            if($comptes = $compte->afficherCompte("SELECT * FROM candidat WHERE idCandidat = ".$compte->getId())){
            
               
                
                      foreach($comptes as $object){

                            echo "<div class = 'row'><div class = 'col-md-5'><div class = 'col-md-6 photo-profil-candidat'><img class = 'img-responsive center-block' src = 'img\\".$object->photoCandidat."'></div><div class = 'col-md-6 nom-candidat'><h4>".$object->nomCandidat." ".$object->prenomCandidat."</h4></div></div></div>";

                            echo "<div class = 'row partie1'>";

                                echo "<div class = 'col-md-3'>";
                
                                    echo "<div class = 'cadre-informations-generales'>";

                                            echo "<div class = 'row informations-generales'><div class = 'col-md-2'><i class = 'fa fa-tag fa-rotate-90' style = 'color:white;font-size:1.5em;margin-top:8px;margin-left:-5px'></i></div><div class = 'col-md-9' style = 'margin-left:-10px'><h4>Informations generales</h4></div></div>";


                                            echo "<div class = 'contenu'><p><span style = 'font-weight:bold'>NOM : </span><span style = 'color:#8ba09c'>".$object->nomCandidat." ".$object->prenomCandidat."</span></p>


                                                  <p><span style = 'font-weight:bold'>SEXE : </span><span style = 'color:#8ba09c'>femme</span></p>
                                                  
                                                  <p><span style = 'font-weight:bold'>DATE DE NAISSANCE : </span><span style = 'color:#8ba09c'>".$object->dateNaissCandidat."</span></p>

                                                  <p><span style = 'font-weight:bold'>NATINALITE : </span><span style = 'color:#8ba09c'>tunisienne</span></p>

                                                  <p><span style = 'font-weight:bold'>TELEPHONE : </span><span style = 'color:#8ba09c'>".$object->numeroTelephoneCandidat."</span></p>

                                                  <p><span style = 'font-weight:bold'>ADRESSE MAIL : </span><span style = 'color:#8ba09c'>".$object->loginCandidat."</span></p>

                                                  <p><span style = 'font-weight:bold'>SITE WEB : </span><span style = 'color:#8ba09c'></span></p></div>";

                                    echo "</div>";

                                    echo "<div class = 'cadre-Competences'>";

                                            echo "<div class = 'row informations-generales'><div class = 'col-md-2'><img src = 'img\Calque11.png'></div><div><h4>Competences</h4></div></div>";
                                            echo "<div class = 'contenu'><p><span style = 'font-weight:bold'>mysql : </span><img src = 'img\Forme21.png'/><img src = 'img\Forme21.png'/><img src = 'img\Forme21.png'/><img src = 'img\Forme21.png'/><img src = 'img\Forme21.png'/></p>
                                                  
                                                  <p><span style = 'font-weight:bold'>php : <img src = 'img\Forme21.png'/><img src = 'img\Forme21.png'/><img src = 'img\Forme21.png'/><img src = 'img\Forme21.png'/></p>

                                                  <p><span style = 'font-weight:bold'>html,css : </span><img src = 'img\Forme21.png'/><img src = 'img\Forme21.png'/><img src = 'img\Forme21.png'/><img src = 'img\Forme21.png'/><img src = 'img\Forme21.png'/></p>

                                                  <p><span style = 'font-weight:bold'>javascript,jquery : </span><img src = 'img\Forme21.png'/><img src = 'img\Forme21.png'/><img src = 'img\Forme21.png'/><img src = 'img\Forme21.png'/></p></div>";

                                    echo "</div>";

                                    echo "<div class = 'cadre-Diplômes'>";

                                            echo "<div class = 'row'><div class = 'informations-generales text-center'><h4>Diplomes</h4></div></div>";
                                            echo "<div class = 'contenu'></p>
                                                  <p></p>
                                                  <p></p>
                                                  <p></p></div>";

                                    echo "</div>";

                                    echo "<div class = 'cadre-Experience'>";

                                            echo "<div class = 'row'><div class = 'informations-generales text-center'><h4>Experience</h4></div></div>";
                                            echo "<div class = 'contenu'><p></p>
                                                  <p></p>
                                                  <p></p>
                                                  <p></p></div>";

                                    echo "</div>";

                                    echo "<div class = 'cadre-Langues'>";

                                            echo "<div class = 'row'><div class = 'informations-generales text-center'><h4>Langues</h4></div></div>";
                                            echo "<div class = 'contenu'><p></p>
                                                  <p></p>
                                                  <p></p>
                                                  <p></p></div>";

                                    echo "</div>";

                                echo "</div>";

                                echo "<div class = 'col-md-8 col-md-offset-1'>";

                                    echo "<div class = 'navigation text-center'>

                                                <button class = 'btn btn-default informations'>informations</button>
                                                <button class = 'btn btn-default offres'><a href = 'index.php'>Offres</a></button>
                                                <button class = 'btn btn-default ma-candidature'><a href = 'afficherCandidats.php'>Ma candidature</a></button>
                                                <button class = 'btn btn-default favoris'><a href = 'afficherFavoris.php'>Favoris</a></button>
                                                <button class = 'btn btn-default parametres'><a href = 'formulaireDeModificationDuCompteCandidat.php'>Parametres</a></button>

                                          </div>";

                                          $_SESSION['id'] = $compte->getId();
                                          $_SESSION['domaine'] = $compte->getDomaine();
                                          $_SESSION['nature'] = $compte->getNature();

                                    echo "<div class = 'partie2'>

                                            <div class = 'row titre-partie2'>

                                              <div class = 'col-md-3 col-md-offset-4'>
                                                  <div class = 'col-md-4' style = 'margin-top:20px'>
                                                    <img src = 'img\sac.png'/>
                                                  </div>
                                                  <div class = 'col-md-8'>
                                                    <h3>".$object->specialiteCandidat."</h3>
                                                  </div>
                                                </div>
                                            </div>

                                            <div class = 'contenu-partie2'>

                                                <span style = 'font-weight:bold'>Formations</span>
                                                <p>Depuis 2011 Eleve Ingenieur en 3e annee, a l'Ecole Nationale des Sciences de l'informatique(ENSI).
                                                    Option Systeme et logiciel embarque (SLE)       
                                                    2009 - 2011 Classe preparatoire aux etudes d'ingenieurs MP.                                                                        
                                                    2007 - 2009 Baccalaureat.  Specialite Mathematique Mention bien avec 14,70 de moyenne</p>

                                                <span style = 'font-weight:bold'>Projets d'etudes</span>
                                                <p>Juillet-Aout  Stage d'immertion en entreprise, GET Wireless.                                                                                     
                                                    2013          Projet : Conception et developpement d'une application web de gestion de voyage .          
                                                    Environnements et Outils : Netbeans(JavaEE,JSF2.0,Primefaces Hibernate), MySQL Workbench</p>

                                                <p>Fevrier-avril
                                                    2013 Projet de Conception et de Developpement, a l'ecole (ENSI).                                                                                                           
                                                    Conception et developpement dune application web d'assurance et application Android                                                   
                                                    Environnements et Outils : Eclipse(JavaEE,JSF2.0,Primefaces Hibernate, Android), MySQL Workbench </p>

                                                <div class = 'paragraphe-bas row'><p class = 'col-md-10'>Importe un nouveau CV et laisse-nous te proposer instantanement des offres d'emploi qui te correspondent
                                                    En prime, on suggerera ce CV a des milliers d'entreprises a la recherche d'une personne comme toi! </p> <span class = 'col-md-2 btn btn-default'>Ajouter CV</span></div>

                                            </div>

                                        </div>";

                                echo "</div>";

                            echo "</div>";
                      
                      }
            
            }
            else{

          echo "erreur de requete de base de donnees";

        }
        
        }
        
?>