<?php session_start(); 
$userName = $_SESSION['userName'];
$users = get_user($userName);
foreach($users as $user){
    $password = $user['password'];
    $email = $user['email'];
}
?>
<html>
	<head>
		<link rel="stylesheet" href="../css/main.css">
	</head>

	<body>
		<main>
    		<button type="button" class="btn-m" onclick="window.location.href='./index.php'">Return Home</button>

    		<h1>Profile/Settings</h1>

   	 		<form action="." method="post" id="aligned">
        		<input type="hidden" name="action" value="update_user">
        
        		<label>Email</label>
        		<input type="text" name="email" value="<?php  echo htmlspecialchars($email)?>"><br>

        		<label>Password</label>
        		<input type="text" name="password" value="<?php  echo htmlspecialchars($password)?>"><br>

		        <label>&nbsp;</label>
        		<input type="submit" class="btn-l" value="Update Profile" /><br>
    		</form>


        	<form method="post">
        		<button type="submit" class="btn-l" name="action" value="logout_user">Log Out</button>
        	</form>

        	<form method="post">
        		<button type="submit" class="btn-l" name="action" value="delete_user">Delete Account</button>
        	</form>
    	</main>
	</body>
</html>