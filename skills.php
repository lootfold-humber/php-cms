<?php
$query = 'SELECT *
    FROM skills
    WHERE user_id=' . $user_id;
$result = mysqli_query($connect, $query);
?>

<section class="w3-center w3-padding">
    <h2 class="heading">Skills</h2>
    <ul>
        <?php while ($record = mysqli_fetch_assoc($result)) : ?>
            <li class="w3-badge w3-large w3-padding"><?= $record['name'] ?></li>
        <?php endwhile; ?>
    </ul>
</section>
