<?php

if (isset($_POST['submit'])) {
    $query = 'INSERT INTO contact_requests (
                name,
                email,
                message
                ) VALUES (
                    "' . mysqli_real_escape_string($connect, $_POST['name']) . '",
                    "' . mysqli_real_escape_string($connect, $_POST['email']) . '",
                    "' . mysqli_real_escape_string($connect, $_POST['message']) . '"
                )';
    $result = mysqli_query($connect, $query);
}
?>

<form method="POST">
    <div>
        <label for="name">Name</label>
        <input type="text" id="name" name="name" placeholder="Name" min=3 required>
    </div>
    <div>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Email" required>
    </div>
    <div>
        <label for="email">Message</label>
        <textarea name="message" id="" cols="30" rows="10" placeholder="Type your message..." required>
        </textarea>
    </div>
    <input type="submit" name="submit" value="Submit">
</form>
