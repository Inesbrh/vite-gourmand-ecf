<?php

class Database {

    public static function connect() {

        $host = "localhost";
        $dbname = "vite_gourmand";
        $username = "root";
        $password = "root";

        try {

            $pdo = new PDO(
                "mysql:host=$host;dbname=$dbname;charset=utf8",
                $username,
                $password
            );

            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $pdo;

        } catch(PDOException $e) {

            die("Erreur connexion : " . $e->getMessage());

        }
    }
}