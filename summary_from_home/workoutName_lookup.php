<html>
    <head>
        <title>Tracked - Workout Lookup</title>
        <link rel="stylesheet" href="css/main.css">
    </head>

    <main class="center">
        <button type="button" class="home_button" onclick="window.location.href='../home_Page'">Return Home</button>
        <h1>Look up your workout</h1>

        <form action="." method="post" id="aligned">
            <input type="hidden" name="action" value="lookup_workout">
            
            <label>Workout Name:</label>
            <input type="text" name="workoutName" required><br>

            <label>&nbsp;</label>
            <input type="submit" value="Find Workout" /><br>
        </form>

    </main>
</html>