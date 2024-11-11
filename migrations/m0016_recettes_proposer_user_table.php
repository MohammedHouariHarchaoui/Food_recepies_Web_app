<?php

use app\core\Application;

class m0016_recettes_proposer_user_table{
    public function up(){
        $db = Application::$app->db;
        $SQL = "CREATE TABLE Recettes_proposer (
            id INT AUTO_INCREMENT PRIMARY KEY,
            nom VARCHAR(255) NOT NULL,
            categorie VARCHAR(255) NOT NULL,
            difficulte VARCHAR(255) NOT NULL,
            tempPreparation VARCHAR(255) NOT NULL,
            tempCuisson VARCHAR(255) NOT NULL,
            tempRepos VARCHAR(255) NOT NULL,
            tempTotale VARCHAR(255) NOT NULL,
            estimationCalorie VARCHAR(255) NOT NULL,
            notation VARCHAR(255) NOT NULL,
            healthy VARCHAR(255) NOT NULL,
            fete VARCHAR(255) NOT NULL,
            saison VARCHAR(255) NOT NULL,
            image VARCHAR(255) NOT NULL,
            description VARCHAR(255) NOT NULL,
            user_id VARCHAR(255) NOT NULL,
            status VARCHAR(255) NOT NULL,
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