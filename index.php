<?php

include('admin/includes/database.php');
include('admin/includes/config.php');
include('admin/includes/functions.php');
$user_id = $_REQUEST['user'];

?>

<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="Content-type" content="text/html; charset=UTF-8">

  <title>Pallav Dubey</title>

  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>
  <header>
    <nav class="w3-bar w3-black">
      <h1 class="w3-bar-item w3-text-amber">Pallav Dubey</h1>
    </nav>
  </header>

  <section class="w3-row w3-center w3-padding w3-light-grey">
    <div class="w3-col l6 intro">
      <div class="w3-container">
        <h2 id="intro" class="w3-center">Hi I'm Pallav</h2>
      </div>
      <div class="w3-container">
        <p id="intro-text" class="w3-center">
          I'm a Toronto based full-stack developer proficient in ASP.NET,
          Angular and React.
        </p>
      </div>
    </div>
    <div class="w3-col l6">
      <img class="w3-round profile-img" src="/images/photo.jpg" alt="profile photo" />
    </div>
  </section>

  <?php
  include('./projects.php');
  include('./skills.php');
  include('./contact.php');
  ?>

  <footer class="w3-black w3-text-amber w3-center w3-container">
    &copy; 2022 | Pallav Dubey
  </footer>
</body>

</html>
