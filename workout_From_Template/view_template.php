<html>
    <head>
        <title>Tracked - View Template</title>
        <link rel="stylesheet" href="../css/main.css">
    </head>

    <main class="center">
        <h1>Template view</h1>
        <?php foreach($templates as $template) : ?>
            <form action="." method="post">
                <input type="hidden" name="action" value="add_exercise">
                <input type="hidden" name="workoutName" required>


                <label>Exercise Name</label>
                <input type="text" name="exerciseName" value="<?php echo htmlspecialchars($template['exerciseName']); ?>"><br>
                
                <label>Reps</label>
                <input type="text" name="reps" required><br>
                <label>Sets</label>
                <input type="text" name="sets" required><br>
                <label>Weight</label>
                <input type="text" name="weight" required><br>
                <label>&nbsp;</label>
                <input type="submit" name="add_exercise" value="Add Exercise"><br>
            </form>
        <?php endforeach; ?>
        <!-- </form> -->
    </main>
</html>