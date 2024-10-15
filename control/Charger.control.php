<?php
  require_once '../model/Connexion.class.php';
  require_once '../config/config.php';
  if(isset($_POST['titre']) and ($_POST['commentaire'])){
    $titre= $_POST['titre'];
    $commentaire= $_POST['commentaire'];
     $img=  $_FILES['img'];


      if (!empty($_FILES)){
          $file_name=$_FILES['img']['name'];
             $_file_name =$_FILES['img']['tmp_name'];
             $file_extension=strrchr($file_name,".");
             $udpload='Image/'.$file_name;
          $_extension= array('.png','.PNG');
          if (in_array($file_extension,$_extension)){
              echo 'verifier votre fichier';
          }

          move_uploaded_file($_file_name,$udpload);




       }


      $req=Connexion::getConnexion()->prepare("insert into galerie(id, titre, commentaire, image) VALUES (?,?,?,?)");
      $req->execute(array(0,$titre, $commentaire, $file_name ));

  }



?>


