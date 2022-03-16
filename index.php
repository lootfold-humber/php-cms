<?php

include('admin/includes/database.php');
include('admin/includes/config.php');
include('admin/includes/functions.php');

$user_id = $_REQUEST['user'];

$query = 'SELECT *
    FROM users
    WHERE id=' . $user_id;
$result = mysqli_query($connect, $query);
$user = mysqli_fetch_assoc($result)

?>

<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="Content-type" content="text/html; charset=UTF-8">

  <title><?php echo $user['first'] . ' ' . $user['last'] ?></title>

  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>
  <header>
    <nav class="w3-bar w3-black">
      <h1 class="w3-bar-item w3-text-amber"><?= $user['first'] . $user['last'] ?></h1>
    </nav>
  </header>

  <?php
  include('./profile.php');
  include('./projects.php');
  include('./skills.php');
  include('./contact.php');
  ?>

  <footer class="w3-black w3-text-amber w3-center w3-container">
    &copy; 2022 | <?= $user['first'] . ' ' . $user['last'] ?>
  </footer>
</body>

</html>
