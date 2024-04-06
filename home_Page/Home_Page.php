<?php session_start(); ?>

<main>
    <h1>Hello</h1>
    <h2><?php echo htmlspecialchars($_SESSION['userName'])?></h2>

    <form method="post">
    <button type="submit" class="profile_button" name="action" value="view_profile">View Profile</button>
    </form>

    <form method="post">
    <button type="submit" class="large_button" name="action" value="workout_from_template">Workout From Template
    </button>
    </form>

    <form method="post">
    <button type="submit" class="large_button" name="action" value="custom_workout">Custom Workout
    </button>
    </form>

</main>