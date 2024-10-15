<?php
require_once '../config/config.php';
require_once '../model/Connexion.class.php';
$temps_session = 15;
$temp_actuel=date("U");
$ip_user=$_SERVER['REMOTE_ADDR'];
$temps=$temp_actuel;
$utilisateur=$ip_user;
$req="SELECT * FROM visiteur WHERE utilisateur=? ";
$req_prepare= Connexion::getConnexion()->prepare($req);
$req_prepare->execute(array($ip_user));
$ip_exist=$req_prepare->rowCount();
if ($ip_exist==0){

    $add_ip=Connexion::getConnexion()->prepare("INSERT INTO visiteur(id,temps,utilisateur) VALUES (0,?,?)");
    $add_ip->execute(array($temps,$utilisateur));

}else{
    $update_ip=Connexion::getConnexion()->prepare("UPDATE visiteur SET temps=? WHERE utilisateur=?");
    $update_ip->execute(array($temps,$utilisateur));
}
$session_delte_time=$temp_actuel-$temps_session;
$del_ip=Connexion::getConnexion()->prepare("DELETE FROM visiteur WHERE temps<?");
$del_ip->execute(array($session_delte_time));
$how_user_nbr=Connexion::getConnexion()->query("SELECT * FROM visiteur");
$user_nbr=$how_user_nbr->rowCount();
echo $user_nbr;
































