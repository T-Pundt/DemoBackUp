<main>

    <h1>Add your exercises</h1>

    <form action="." method="post" id="aligned">
        <input type="hidden" name="action" value="add_exercise">
        
        <label>Exercise Name</label>
        <input type="text" name="exerciseName" required><br>

        <label>Reps</label>
        <input type="text" name="reps" required><br>

        <label>Sets</label>
        <input type="text" name="sets" required><br>

        <label>Weight</label>
        <input type="text" name="weight" required><br>

        <label>&nbsp;</label>
        <input type="submit" value="Add Exercise" /><br>
    </form>


    
    <form method="post">
    <button type="submit" class="large_button" name="action" value="start_workout">Start Workout
    </button>
    </form>

</main>