<?php session_start(); ?>

<head>
    <link rel="stylesheet" href="../css/main.css">
</head>

<body>
    <main>
        <h1>Hello</h1>
        <h2><?php echo htmlspecialchars($_SESSION['userName'])?></h2>

        <form method="post">
        <button type="submit" class="btn-m" name="action" value="view_profile">View Profile</button>
        </form>

        <form method="post">
        <button type="submit" class="btn-l" name="action" value="workout_from_template">Workout From Template
        </button>
        </form>

        <form method="post">
        <button type="submit" class="btn-l" name="action" value="custom_workout">Custom Workout</form>

        <form method="post">
        <button type="submit" class="btn-l" name="action" value="workout_summary">Workout Summary</button>
        </form>

    </main>
</body>