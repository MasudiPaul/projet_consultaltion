<?php

require_once '../config/config.php';
require_once '../model/Connexion.class.php';
if (isset($_POST['nom_utilisateur'],$_POST['mot_de_passe'])){
    $a=$_POST['nom_utilisateur'];
    $b=$_POST['mot_de_passe'];
    $req=Connexion::getConnexion()->query("select * from t_utilisateur  WHERE nom='$a' AND password='$b'");
    $req_pdo=$req->fetch();
    if ($req_pdo['nom']!=null){

    header("Location: ../backend/index.php");



    }
    else{
        echo "echec de connection";
    }
}
?>