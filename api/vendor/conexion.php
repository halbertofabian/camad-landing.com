<?php
class Conexion
{
    public static function conectar()
    {
        $con = new PDO(
            "mysql:host=localhost;dbname=db_sead",
            "root",
            ""
        );


        $con->exec("set names utf8");

        return $con;
    }
}
