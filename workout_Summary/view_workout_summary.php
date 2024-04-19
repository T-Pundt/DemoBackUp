<html>
    <head>
        <title>Tracked - Workout Summary</title>
        <link rel="stylesheet" href="../css/main.css">
    </head>
    <body>
    <main class="center">
	        <h1>Workout Summary</h1>

	        <?php foreach($workoutExercies as $workoutExercise) : ?>
	        <p><?php echo htmlspecialchars($workoutExercise['exerciseName'])?></p>
	        <p>Reps:<?php echo htmlspecialchars($workoutExercise['reps'])?> Sets:<?php echo htmlspecialchars($workoutExercise['sets'])?> Weight: <?php echo htmlspecialchars($workoutExercise['weight'])?></p>
	        <?php endforeach; ?>

	        <button type="button" class="btn-m" onclick="window.location.href='../home_Page'">Return Home</button>
	    </main>
	</body>
</html>