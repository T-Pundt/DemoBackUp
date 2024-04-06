<?php session_start(); ?>

<main>
    <h1>Welcome</h1>
    <h2><?php echo htmlspecialchars($_SESSION['userName'])?></h2>

    <form method="post">
    <button type="submit" class="profile_button" name="action" value="view_profile">View Profile</button>
    </form>

</main>