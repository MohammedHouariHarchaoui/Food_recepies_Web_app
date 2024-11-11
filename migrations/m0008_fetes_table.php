<?php

use app\core\Application;

class m0008_fetes_table{
    public function up(){
        $db = Application::$app->db;
        $SQL = "CREATE TABLE Fetes (
            id INT AUTO_INCREMENT PRIMARY KEY,
            nom VARCHAR(512) NOT NULL,
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