<?php

include( 'includes/database.php' );
include( 'includes/config.php' );
include( 'includes/functions.php' );

secure();

include( 'includes/header.php' );

if( isset( $_POST['title'] ) )
{
  
  if( $_POST['title'] and $_POST['content'] )
  {
    
    $query = 'INSERT INTO projects (
        title,
        content,
        date,
        type,
        url,
        user_id
      ) VALUES (
         "'.mysqli_real_escape_string( $connect, $_POST['title'] ).'",
         "'.mysqli_real_escape_string( $connect, $_POST['content'] ).'",
         "'.mysqli_real_escape_string( $connect, $_POST['date'] ).'",
         "'.mysqli_real_escape_string( $connect, $_POST['type'] ).'",
         "'.mysqli_real_escape_string( $connect, $_POST['url'] ).'",
         "'.mysqli_real_escape_string( $connect, $_SESSION['id'] ).'"
      )';
    mysqli_query( $connect, $query );
    
    set_message( 'Project has been added' );
    
  }
  
  header( 'Location: projects.php' );
  die();
  
}

?>

<h2>Add Project</h2>

<form method="post">
  
  <label for="title">Title:</label>
  <input type="text" name="title" id="title" required>
    
  <br>
  
  <label for="content">Content:</label>
  <textarea type="text" name="content" id="content" rows="10" required></textarea>
      
  <script>

  ClassicEditor
    .create( document.querySelector( '#content' ) )
    .then( editor => {
        console.log( editor );
    } )
    .catch( error => {
        console.error( error );
    } );
    
  </script>
  
  <br>
  
  <label for="url">URL:</label>
  <input type="text" name="url" id="url" required>
  
  <br>
  
  <label for="date">Date:</label>
  <input type="date" name="date" id="date">
  
  <br>
  
  <label for="type">Type:</label>
  <?php
  
  $values = array( 'Website', 'Graphic Design', 'App' );
  
  echo '<select name="type" id="type">';
  foreach( $values as $key => $value )
  {
    echo '<option value="'.$value.'"';
    echo '>'.$value.'</option>';
  }
  echo '</select>';
  
  ?>
  
  <br>
  
  <input type="submit" value="Add Project">
  
</form>

<p><a href="projects.php"><i class="fas fa-arrow-circle-left"></i> Return to Project List</a></p>


<?php

include( 'includes/footer.php' );

?>
