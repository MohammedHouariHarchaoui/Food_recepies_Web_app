<?php

use app\core\Application;

class m0018_recettes_proposees_ingrediants{
    public function up(){
        $db = Application::$app->db;
        $SQL = "CREATE TABLE Recettes_Proposees_Nutritions (
            id_recette VARCHAR(255) NOT NULL,
            id_nutrition VARCHAR(255) NOT NULL,
            quantity VARCHAR(255) NOT NULL,
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