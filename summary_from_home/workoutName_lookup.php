<html>
    <head>
        <title>Tracked - Workout Lookup</title>
        <link rel="stylesheet" href="../css/main.css">
    </head>
	<body>
	    <main>
	        <button type="button" class="btn-m" onclick="window.location.href='../home_Page'">Return Home</button>
	        <h1>Look up your workout</h1>

	        <form action="." method="post" id="aligned">
	            <input type="hidden" name="action" value="lookup_workout">
	
	            <label>Workout Name:</label>
	            <input type="text" name="workoutName" required><br>

	            <label>&nbsp;</label>
	            <input type="submit" value="Find Workout" /><br>
	        </form>


			<h1>View all previous workouts</h1>
			<form method="post">
        	<button type="submit" class="btn-l" name="action" value="list_all_workouts">List Workouts</button>
        	</form>

	    </main>
	</body>
</html>