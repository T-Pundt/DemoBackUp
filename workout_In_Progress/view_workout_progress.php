<html>
    <head>
        <title>Tracked - Workout In Progress</title>
        <link rel="stylesheet" href="../css/main.css">
    </head>
    <body>
	    <main class="center">
    		<h1>Workout In Progress</h1>

	    	<?php foreach($workoutExercies as $workoutExercise) : ?>
	    	        <form action="." method="post">
	    	            <input type="hidden" name="action" value="workout_complete">
	    	            <p><?php echo htmlspecialchars($workoutExercise['exerciseName'])?></p>
	    	            <input type="checkbox" required name="completed">Reps: <?php echo htmlspecialchars($workoutExercise['reps'])?> Sets:<?php echo htmlspecialchars($workoutExercise['sets'])?> Weight:<?php echo htmlspecialchars($workoutExercise['weight'])?>
	    	        </form>
	    	    <?php endforeach; ?>
				
	        	<form method="post">
	        	<button type="submit" class="btn-l" name="action" value="workout_complete">Complete</button>
	        	</form>
	    	</main>
	</body>
</html>