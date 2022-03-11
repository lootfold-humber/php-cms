<!-- CREATE TABLE contact_requests
(
	id INT PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(100),
	email VARCHAR(100),
	message VARCHAR(255)
) -->

<?php
include('includes/database.php');
include('includes/config.php');
include('includes/functions.php');

secure();

include('includes/header.php');

if (isset($_GET['delete'])) {

    $query = 'DELETE FROM contact_requests
            WHERE id = ' . $_GET['delete'];

    mysqli_query($connect, $query);

    set_message('Request has been deleted');

    header('Location: contact_requests.php');
    die();
}

$query = 'SELECT * FROM contact_requests';
$result = mysqli_query($connect, $query);
?>

<h2>Contact Requests</h2>

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Message</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php while ($record = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><?php echo $record['name']; ?></td>
                <td><?php echo $record['email']; ?></td>
                <td><?php echo $record['message']; ?></td>
                <td>
                    <a href="contact_requests.php?delete=<?php echo $record['id']; ?>" onclick="javascript:confirm('Are you sure you want to delete?');">Delete</i></a>
                </td>
            </tr>
        <?php endwhile ?>
    </tbody>
</table>
