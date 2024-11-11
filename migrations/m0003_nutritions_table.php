<?php

use app\core\Application;

class m0003_nutritions_table{
    public function up(){
        $db = Application::$app->db;
        $SQL = "CREATE TABLE Nutritions (
            id INT AUTO_INCREMENT PRIMARY KEY,
            nom VARCHAR(255) NOT NULL,
            class VARCHAR(255) NOT NULL,
            saison VARCHAR(255) NOT NULL,
            healthy VARCHAR(255) NOT NULL,
            measureQuantity VARCHAR(255) NOT NULL,
            calorie VARCHAR(255) NOT NULL,
            calorieReference VARCHAR(255) NOT NULL,
            glupide VARCHAR(255) NOT NULL,
            glupideReference VARCHAR(255) NOT NULL,
            lipide VARCHAR(255) NOT NULL,
            lipideReference VARCHAR(255) NOT NULL,
            miniraux VARCHAR(255) NOT NULL,
            minirauxReference VARCHAR(255) NOT NULL,
            protein VARCHAR(255) NOT NULL,
            proteinReference VARCHAR(255) NOT NULL,
            vitamine VARCHAR(255) NOT NULL,
            vitamineReference VARCHAR(255) NOT NULL,
            cholesterol VARCHAR(255) NOT NULL,
            cholesterolReference VARCHAR(255) NOT NULL,
            image VARCHAR(255) NOT NULL,
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