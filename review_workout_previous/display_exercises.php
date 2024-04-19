<html>
	<head>
		<link rel="stylesheet" href="../css/main.css">
	</head>

	<body>
	    <main>
	        <h1>Review Workout: '<?php echo htmlspecialchars($previous_workoutName)?>'</h1>
	
	        <?php foreach($workoutExercies as $workoutExercise) : ?>
	            <form action="." method="post">
                	<input type="hidden" name="action" value="add_exercise">
                	<input type="hidden" name="workoutName" required>


                	<label>Exercise Name</label>
              		<input type="text" name="exerciseName" value="<?php echo htmlspecialchars($workoutExercise['exerciseName']); ?>" required><br>
                
    				<label>Reps</label>
                	<input type="text" name="reps" value="<?php echo htmlspecialchars($workoutExercise['reps']); ?>" required><br>
    	            <label>Sets</label>
    	            <input type="text" name="sets" value="<?php echo htmlspecialchars($workoutExercise['sets']); ?>" required><br>
    	            <label>Weight</label>
    	            <input type="text" name="weight" value="<?php echo htmlspecialchars($workoutExercise['weight']); ?>" required><br>
                    <label>&nbsp;</label>
    	            <input type="submit" class="btn-l" name="add_exercise" value="Add Exercise"><br>
                </form>
            <?php endforeach; ?>

            <form method="post">
                <button type="submit" class="btn-l" name="action" value="review_new_workout">Review: '<?php echo htmlspecialchars($workoutName)?>'</button>
            </form>
    </main>
</body>