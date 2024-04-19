<head>
<link rel="stylesheet" href="../css/main.css">
</head>

<body>
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
            <input type="submit" class="btn-l" value="Add Exercise" /><br>
        </form>


        
        <form method="post">
        <button type="submit" class="btn-l" name="action" value="review_workout">Review Workout</button>
        </form>

    </main>
</body>