<?php
class Connexion
{
    private static $con;
    public static function getConnexion(){
        if(self::$con == null){
            self::$con = new PDO(BD_DSN,BD_UTILISATEUR, BD_PASSWORD,
            array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        }
        return self::$con;
    }
}