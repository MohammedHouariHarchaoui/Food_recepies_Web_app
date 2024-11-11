<?php

use app\core\Application;

class m0017_recettes_proposees_etapes_table{
    public function up(){
        $db = Application::$app->db;
        $SQL = "CREATE TABLE Recettes_Proposees_Etapes (
            id INT AUTO_INCREMENT PRIMARY KEY,
            id_recette VARCHAR(255) NOT NULL,
            description TEXT NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )  ENGINE=INNODB;";
        $db->pdo->exec($SQL);
    }

    public function down(){
        $db = Application::$app->db;
        $SQL = "DROP TABLE users;";
        $db->pdo->exec($SQL);
    }
}