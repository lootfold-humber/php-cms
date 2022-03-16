<?php

include( 'includes/database.php' );
include( 'includes/config.php' );
include( 'includes/functions.php' );

secure();

include( 'includes/header.php' );

?>

<ul id="dashboard">
  <li>
    <a href="projects.php" class="dashboard-link">
      <span>Manage Projects</span>
      <img src="icons/projects.svg" alt="Projects icon" height=35/>
    </a>
  </li>
  <li>
    <a href="skills.php" class="dashboard-link">
      <span>Manage Skills</span>
      <img src="icons/skills.svg" alt="Skills icon" height=35/>
    </a>
  </li>
  <li>
    <a href="contact_requests.php" class="dashboard-link">
      <span>Contact Requests</span>
      <img src="icons/contact.svg" alt="Contact icon" height=35/>
    </a>
  </li>
  <li>
    <a href="users.php" class="dashboard-link">
      <span>Manage Users</span>
      <img src="icons/users.svg" alt="Users icon" height=35/>
    </a>
  </li>
  <li>
    <a href="logout.php" class="dashboard-link">
      <span>Logout</span>
      <img src="icons/logout.svg" alt="Logout icon" height=35/>
    </a>
  </li>
</ul>

<?php

include( 'includes/footer.php' );

?>
