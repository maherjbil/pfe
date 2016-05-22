<?php
session_start();

    header("location:rechercherAnnonceEtCandidature.php?motCle=".$_GET['motCle']);

?>