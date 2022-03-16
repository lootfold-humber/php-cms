<?php

include( 'includes/database.php' );
include( 'includes/config.php' );
include( 'includes/functions.php' );

secure();

include( 'includes/header.php' );
if( isset( $_GET['delete'] ) )
{
  
  $query = 'DELETE FROM skills
    WHERE id = '.$_GET['delete'].'
    LIMIT 1';
  mysqli_query( $connect, $query );
    
  set_message( 'Skill has been deleted' );
  
  header( 'Location: skills.php' );
  die();
  
}

$query = 'SELECT *
  FROM skills
  WHERE user_id='. mysqli_real_escape_string($connect, $_SESSION['id']).'
  ORDER BY name DESC';
$result = mysqli_query( $connect, $query );

?>

<h2>Manage Skills</h2>

<p><a href="skills_add.php"><i class="fas fa-plus-square"></i> Add Skill</a></p>

<table>
  <tr>
    <th></th>
    <th align="center">ID</th>
    <th align="left">Name</th>
    <th align="center">Reference URL</th>
    <th align="center">Confidence</th>
    <th></th>
    <th></th>
    <th></th>
  </tr>
  <?php while( $record = mysqli_fetch_assoc( $result ) ): ?>
    <tr>
      <td align="center">
        <img src="image.php?type=skill&id=<?php echo $record['id']; ?>&width=100&height=100&format=inside">
      </td>
      <td align="center"><?php echo $record['id']; ?></td>
      <td align="left">
        <?php echo htmlentities( $record['name'] ); ?>
      </td>
      <td align="center"><?php echo $record['url']; ?></td>
      <td align="center"><?php echo $record['confidence']; ?>%</td>
      
      <td align="center"><a href="skills_logo.php?id=<?php echo $record['id']; ?>">Logo</i></a></td>
      <td align="center"><a href="skills_edit.php?id=<?php echo $record['id']; ?>">Edit</i></a></td>
      <td align="center">
        <a href="skills.php?delete=<?php echo $record['id']; ?>" onclick="javascript:confirm('Are you sure you want to delete this skill?');">Delete</i></a>
      </td>
    </tr>
  <?php endwhile; ?>
</table>

<?php

include( 'includes/footer.php' );

?>
