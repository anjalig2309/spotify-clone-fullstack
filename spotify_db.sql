CREATE DATABASE IF NOT EXISTS spotify_db;
USE spotify_db;

CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL
);

CREATE TABLE songs (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(200) NOT NULL,
  artist VARCHAR(100),
  file_path VARCHAR(255) NOT NULL
);

-- Sample songs
INSERT INTO songs (title, artist, file_path) VALUES
('Sample Song 1', 'Artist 1', 'songs/song1.mp3'),
('Sample Song 2', 'Artist 2', 'songs/song2.mp3');
