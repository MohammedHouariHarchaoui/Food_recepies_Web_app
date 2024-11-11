<?php

use app\core\Application;

class m0005_users_recettes_favori_table{
    public function up(){
        $db = Application::$app->db;
        $SQL = "CREATE TABLE Users_Recettes_Favori (
            id_user VARCHAR(255) NOT NULL,
            id_recette VARCHAR(255) NOT NULL,
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