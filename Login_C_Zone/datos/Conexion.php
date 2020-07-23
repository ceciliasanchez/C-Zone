<?php

class Conexion
{   private $con;
    private $dbhost='bhdte3irtd1zcfyiuypu-mysql.services.clever-cloud.com';
    private $dbuser='ucsxinvotzotdvqn';
    private $dbpass='cgGohtK0k0rvi13z02NP';
    private $dbname='bhdte3irtd1zcfyiuypu';
    /**
     * Conexión a la base datos
     *
     * @return PDO
     */
    public static function conectar()
    {
        try {
            $cn = new PDO("mysql:host=bhdte3irtd1zcfyiuypu-mysql.services.clever-cloud.com;dbname=bhdte3irtd1zcfyiuypu", "ucsxinvotzotdvqn", "cgGohtK0k0rvi13z02NP");
            return $cn;

        } catch (PDOException $ex) {
            die($ex->getMessage());
        }
    }
    
     

}
