<?php

if (isset($_POST['submit'])) {
    $query = 'INSERT INTO contact_requests (
                name,
                email,
                message,
                user_id
                ) VALUES (
                    "' . mysqli_real_escape_string($connect, $_POST['name']) . '",
                    "' . mysqli_real_escape_string($connect, $_POST['email']) . '",
                    "' . mysqli_real_escape_string($connect, $_POST['message']) . '",
                    '.$user_id.'
                )';
    echo $query;
    $result = mysqli_query($connect, $query);
}
?>

<section class="w3-center w3-padding">
    <h2 class="heading">Contact Me</h2>
    <form method="POST">
        <input class="w3-input" type="text" id="name" name="name" placeholder="Name" min=3 required>
        <input class="w3-input" type="email" id="email" name="email" placeholder="Email" required>
        <textarea class="w3-input" name="message" id="" cols="30" rows="10" placeholder="Type your message..." required>
            </textarea>
        <input class="w3-margin-top w3-btn w3-black" type="submit" name="submit" value="Submit">
    </form>
</section>
