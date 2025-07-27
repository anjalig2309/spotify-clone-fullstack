🎧 Spotify Clone - Music Streaming Web App

This is a full-stack Spotify Clone built using HTML, CSS, JavaScript, PHP, and MySQL. It allows users to register, log in, and stream songs dynamically from a database. The project includes interactive music controls and a responsive design.



🔧 Tech Stack

Frontend:

HTML5 – Webpage structure

CSS3 – Styling and layout

JavaScript – For play/pause, volume, seek bar

Bootstrap – Responsive design

Backend:

PHP – Server-side logic and data handling

Database:

MySQL – Stores songs and user data

Tools:

XAMPP – Apache server and MySQL locally

VS Code – Code editor

Git & GitHub – Version control and project hosting




📌 Features

User Authentication
Register and login functionality using PHP & MySQL. User data is stored in the users table.

Music Streaming
Songs are stored in the database and streamed using HTML <audio> and JavaScript.

Interactive Music Player
Play, pause, volume control, and seek bar are handled using JavaScript.

Dynamic Content
Songs and playlists are loaded from MySQL using PHP.

Responsive UI
The interface works on mobile, tablet, and desktop using Bootstrap.




🚀 How It Works

Step 1: Homepage Load

When the user visits the website, the homepage shows all available songs.

Songs are stored in MySQL and displayed using PHP.

Step 2: User Registration/Login

New users can register using name, email, and password.

Registered users can log in.

PHP handles form validation and data is verified from the users table.

Step 3: Dashboard

After login, users see a dashboard where all songs are listed.

Each song shows title, artist, and a play button.

Step 4: Playing Songs

Clicking the play button triggers a JavaScript audio object.
Example:
let audio = new Audio("songs/song1.mp3");
audio.play();

Step 5: Music Controls

Play/Pause, Volume, Seek bar handled using JavaScript.

Linked to the HTML <audio> element.

Step 6: Responsive Design

UI adjusts automatically on mobile, tablet, and desktop using Bootstrap.



🛠️ How to Run Locally

Install XAMPP

Place the project folder inside htdocs/

Import spotify_db.sql into phpMyAdmin

Start Apache and MySQL from XAMPP

Open http://localhost/spotify-clone/ in your browser

📊 Database Tables

users – stores user info (id, name, email, password)

songs – stores song data (id, title, artist, file_path)

playlists (optional) – for managing playlists



📁 Folder Structure

/spotify-clone/
├── index.html
├── login.php
├── register.php
├── dashboard.php
├── /css/
├── /js/
├── /songs/
├── /images/
└── /sql/spotify_db.sql


🎯 Outcome

This project helped me improve skills in:

Full-stack development using PHP and MySQL

JavaScript interactivity and DOM manipulation

Audio streaming using <audio> tag

Responsive UI design using Bootstrap

Secure login & registration system

Dynamic content handling from MySQL

It boosted my confidence in building real-world web applications from scratch.

