<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}
include 'db.php';

$songs = mysqli_query($conn, "SELECT * FROM songs");
?>

<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h2>Dashboard</h2>
  <div id="songs-list">
    <?php while ($row = mysqli_fetch_assoc($songs)): ?>
      <div class="song" data-file="<?= htmlspecialchars($row['file_path']) ?>">
        <span><?= htmlspecialchars($row['title']) ?> by <?= htmlspecialchars($row['artist']) ?></span>
        <button onclick="playSong(this)">Play</button>
      </div>
    <?php endwhile; ?>
  </div>
  <audio id="audioPlayer" controls style="width:100%; margin-top:20px;"></audio>

  <script src="script.js"></script>
</body>
</html>
