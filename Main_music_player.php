<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: index.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: index.php");
  }
?>

<!--- perfectly done - 13/07/22 --->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Music Player</title>
    <link rel="stylesheet" href="style2.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
    />
    <style>
      body {
        background-image: url('background-music-player.jpg');
        background-repeat: no-repeat;
        background-size: 1900px 1000px;
           }

.errors {
  width: 92%; 
  margin: 0px auto; 
  padding: 10px; 
  border: 1px solid #a94442; 
  color: #a94442; 
  background: #f2dede; 
  border-radius: 5px; 
  text-align: left;
}
.success {
  color: #3c763d; 
  background: #dff0d8; 
  border: 1px solid #3c763d;
  margin-bottom: 10px;
  margin-top: 10px;
  text-align: center;
      }
    </style>
  </head>
  <body>
    <div class="wrapper">
      <div class="top-bar">
        <i class="material-icons">expand_more</i>
        <span>Now Playing</span>
        <i class="material-icons">more_horiz</i>
      </div>
      <div class="img-area">
        <img src="" alt="" />
      </div>
      <div class="song-details">
        <p class="name"></p>
        <p class="artist"></p>
      </div>
      <div class="progress-area">
        <div class="progress-bar"></div>
        <div class="timer">
          <span class="current">0:00</span>
          <span class="duration"></span>
        </div>
        <audio id="main-audio" src=""></audio>
      </div>
      <div class="controls">
        <i id="repeat-plist" class="material-icons" title="Playlist looped"
          >repeat</i
        >
        <i id="prev" class="material-icons">skip_previous</i>
        <div class="play-pause">
          <i class="material-icons">play_arrow</i>
        </div>
        <i id="next" class="material-icons">skip_next</i>
        <i id="more-music" class="material-icons">queue_music</i>
      </div>
      <div class="music-list">
        <div class="header">
          <div class="row">
            <i class="material-icons">queue_music</i>
            <span>Music list</span>
          </div>
          <i id="close" class="material-icons">close</i>
        </div>
        <ul> 
        </ul>
      </div>
      <!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="errors success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">Logout</a> </p>
    <?php endif ?>
    </div>

    <script src="js/music-list.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
