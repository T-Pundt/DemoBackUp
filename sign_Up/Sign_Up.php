<html>
    <head>
        <title>Tracked - Sign Up</title>
        <link rel="stylesheet" href="../css/main.css">
    </head>
	<body>
	    <main class="center">

	        <h1 class="title">Sign Up</h1>
	        <br><br>
	        <form action="." method="post" id="aligned">
	            <input type="hidden" name="action" value="add_user">

	            <!-- <label>Email</label> -->
	            <input type="text" name="email" class="text_input" placeholder="Email" required ><br>
	            <br>
	            <label>Username</label>
	            <input type="text" name="userName" class="text_input" placeholder="Username" required><br>
	            <br>
	            <label>Password</label>
	            <input type="text" name="password" class="text_input" placeholder="Password" required><br>
	            <br><br>
	            <label>&nbsp;</label>
	            <input type="submit" value="Create Profile" class="med_button" /><br>
	    </main>
	</body>
</html>