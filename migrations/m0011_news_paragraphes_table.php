<?php

use app\core\Application;

class m0011_news_paragraphes_table{
    public function up(){
        $db = Application::$app->db;
        $SQL = "CREATE TABLE News_paragraphes (
            id INT AUTO_INCREMENT PRIMARY KEY,
            id_news VARCHAR(255) NOT NULL,
            paragraphe VARCHAR(255) NOT NULL,
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