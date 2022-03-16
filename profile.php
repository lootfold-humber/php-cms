<section class="w3-row w3-center w3-padding w3-light-grey">
    <div class="w3-col l6 intro">
        <div class="w3-container">
            <h2 id="intro" class="w3-center">Hi I'm <?= $user['first'] ?></h2>
        </div>
        <div class="w3-container">
            <p id="intro-text" class="w3-center">
                <?= $user['about'] ?>
            </p>
        </div>
    </div>
    <div class="w3-col l6">
        <img class="w3-round profile-img" src="admin/image.php?type=user&id=<?php echo $user['id']; ?>">
    </div>
</section>
