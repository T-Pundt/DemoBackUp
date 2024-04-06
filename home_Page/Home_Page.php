<?php session_start(); ?>

<main>
    <h1>Welcome</h1>
    <h2><?php echo htmlspecialchars($_SESSION['userName'])?></h2>
</main>