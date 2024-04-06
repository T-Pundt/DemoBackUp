<?php session_start(); 
$userName = $_SESSION['userName'];
$users = get_user($userName);
foreach($users as $user){
    $password = $user['password'];
    $email = $user['email'];
}
?>


<main>
    <h1>This is the profile page</h1>

    <button type="button" class="large_button" onclick="window.location.href='./index.php'">Return Home</button>

    <form method="post">
    <button type="submit" class="delete_button" name="action" value="delete_user">Delete Account</button>
    </form>

    <form action="." method="post" id="aligned">
        <input type="hidden" name="action" value="update_user">
        
        <label>Email</label>
        <input type="text" name="email" value="<?php  echo htmlspecialchars($email)?>"><br>

        <label>Password</label>
        <input type="text" name="password" value="<?php  echo htmlspecialchars($password)?>"><br>

        <label>&nbsp;</label>
        <input type="submit" value="Update Profile" /><br>

</main>