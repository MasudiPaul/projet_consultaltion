<?php
require_once '../config/config.php';
require_once '../model/Connexion.class.php';
if (isset($_POST['id'])  AND $_POST['titre'] AND $_POST['commentaire']  ){
$img=  $_FILES['img'];


$file_name="";


if (!empty($_FILES)){

    $file_name=$_FILES['img']['name'];
    $_file_name =$_FILES['img']['tmp_name'];
    $file_extension=strrchr($file_name,".");

    $udpload='Image/'.$file_name;
    move_uploaded_file($_file_name,$udpload);



    $req_pdo= connexion::getConnexion()->prepare("UPDATE  galerie SET titre=?, commentaire=?, image=? WHERE  id=?");

    $req_pdo->execute(array($_POST['titre'],$_POST['commentaire'],$file_name,$_POST['id']));


}
    if (!empty($file_name)){
   // var_dump($file_name);die();


        $req_pdo= connexion::getConnexion()->prepare("UPDATE  galerie SET titre=?, commentaire=?, image=? WHERE  id=?");

        $req_pdo->execute(array($_POST['titre'],$_POST['commentaire'],$file_name,$_POST['id']));


    }




    else{


    $req_pdo= connexion::getConnexion()->prepare("UPDATE  galerie SET titre=?, commentaire=?, image=? WHERE  id=?");

    $req_pdo->execute(array($_POST['titre'],$_POST['commentaire'],$_file_name,$_POST['id']));

}
}



 header("Location:../backend/Modifierform.php");

?>


