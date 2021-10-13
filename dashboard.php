<?php

include( 'includes/database.php' );
include( 'includes/config.php' );
include( 'includes/functions.php' );

secure();

include( 'includes/header.php' );

?>

<ul id="dashboard">
  <li>
    <a href="articles.php">
      Manage Articles
    </a>
  </li>
  <li>
    <a href="users.php">
      Manage Users
    </a>
  </li>
</ul>

<?php

include( 'includes/footer.php' );

?>
