<?php

use app\core\Application;

class m0015_pourcentage_idee_recette_table{
    public function up(){
        $db = Application::$app->db;
        $SQL = "CREATE TABLE pourcentage_idee_recette (
            id INT AUTO_INCREMENT PRIMARY KEY,
            pourcentage VARCHAR(255) NOT NULL,
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