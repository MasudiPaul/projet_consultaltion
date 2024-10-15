<?php
require_once "../config/config.php";
require_once "../model/Connexion.class.php";
require_once "../model/Contact.php";
try{

    $contact= new Contact(0,$_POST['nom'], $_POST['telephone'],$_POST ['email'], $_POST['entreprise'],$_POST['sujet'],$_POST['commentaire']);


    Contact::Enregister($contact);

}catch (Exception $ex){

}
header("Location: ../contact.html");


?>
