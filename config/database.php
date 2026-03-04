<?php

class Database {

    public static function connect() {

        $host = "localhost";
        $dbname = "vite_gourmand";
        $username = "root";
        $password = "root";

        try {
            return new PDO(
                "mysql:host=$host;dbname=$dbname;charset=utf8",
                $username,
                $password
            );
        } catch(PDOException $e) {
            die("Erreur connexion : " . $e->getMessage());
        }
    }
}