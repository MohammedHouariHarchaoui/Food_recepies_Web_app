<?php

use app\core\Application;

class m0002_users_table{
    public function up(){
        $db = Application::$app->db;
        $SQL = "CREATE TABLE Users (
            id INT AUTO_INCREMENT PRIMARY KEY,
            email VARCHAR(255) NOT NULL,
            firstname VARCHAR(255) NOT NULL,
            lastname VARCHAR(255) NOT NULL,
            sexe VARCHAR(255) NOT NULL,
            date_naissance VARCHAR(255) NOT NULL,
            status TINYINT DEFAULT 0,
            password VARCHAR(512) NOT NULL,
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