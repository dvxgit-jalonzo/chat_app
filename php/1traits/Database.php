<?php

trait Database
{
    protected function pdo(){
        $host = "mysql:host=localhost;dbname=chat_app;";
        $username = "root";
        $password = "";
        $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING];

        try {
            $pdo = new PDO($host, $username, $password, $options);

            if ($pdo instanceof PDO){
                return $pdo;
            }else{
                throw new PDOException("Database not found");
            }
        }catch (PDOException $e){
            die($e->getMessage());
        }
    }
}