<head>
<link rel="stylesheet" href="../css/main.css">
</head>

<body>
    <main>
        <h1>All Previous Workouts</h1>

        <?php foreach($workout_names as $workout_name) : ?>

            <form method="post">
            <input type="hidden" name="workoutName" value="<?php echo $workout_name['workoutName']; ?>" >
            <button type="submit" class="btn-l" name="action" value="review_workout"><?php echo htmlspecialchars($workout_name['workoutName']); ?></button>
            </form>

        <?php endforeach; ?>
    </main>
</body>