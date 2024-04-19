<html>
    <head>
        <title>Tracked - Template Selection</title>
        <link rel="stylesheet" href="../css/main.css">
    </head>
	<body>
	    <main>
	        <h1>Template selection</h1>

	        <form method="post">
		        <button type="submit" name="action" class="btn-l" value="view_leg_template">Leg Workout</button>
	        </form>

	        <form method="post">
		        <button type="submit" class="btn-l" name="action" value="view_chest_template">Chest Workout</button>
	        </form>

    	    <form method="post">
        		<button type="submit" class="btn-l" name="action" value="view_arms_template">Arm Workout</button>
        	</form>

        	<form method="post">
        		<button type="submit" class="btn-l" name="action" value="view_back_template">Back Workout</button>
        	</form>

        	<form action="." method="post">
        		<input type="hidden" name="action" value="start_workout">
        		<input type="submit" name="start_workout" value="Start Workout">
        	</form>
    	</main>
	</body>
</html>