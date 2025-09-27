CREATE DATABASE IF NOT EXISTS cookbook CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE cookbook;

CREATE TABLE IF NOT EXISTS recipes (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(150) NOT NULL,
  category VARCHAR(80) DEFAULT NULL,
  prep_minutes INT UNSIGNED DEFAULT NULL,
  difficulty ENUM('facile','moyen','difficile') DEFAULT 'facile',
  steps TEXT NOT NULL,
  image VARCHAR(255) DEFAULT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO recipes (title, category, prep_minutes, difficulty, steps)
VALUES
('Pâtes à l’ail et huile', 'Pâtes', 15, 'facile', '1) Cuire les pâtes.\n2) Chauffer ail + huile.\n3) Mélanger, saler.'),
('Salade rapide', 'Salades', 10, 'facile', '1) Laver.\n2) Assaisonner.\n3) Servir.');