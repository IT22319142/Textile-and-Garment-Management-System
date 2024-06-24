<?php 
    session_start();

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $username = $_POST["uname"];
        $password = $_POST["pwd"];

        if($username == "zara@123" && $password == "1234")
        {
            $_SESSION['logged_user'] = $username;
        }
        else
        {
            echo "<script>alert('Your Username or Password is incorrect!')</script>";
        }
    }
?>

<!-- Staff Login Page -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign in</title>
    <link rel="stylesheet"href="SMsignin.css">
</head>
<body>
<!-- Logo -->
<img src="logo.png" alt="Logo" width="150" height="150">
<!-- Headings for the form -->
<div class="headingsContainer">
    <img src="userIcon.png" alt="UserIcon" height="40px" width="40px">
    <h1>Staff Sign in</h1>
    <form action="" method="POST">
    <!-- Main container for all inputs -->
    <div class="mainContainer">
        <!-- Username -->
        <label for="username"> Username</label>
        <input type="text" placeholder="Enter Username" name="uname" required>

        <br><br>

        <!--Enter Password -->
        <label for="pswrd">Password</label>
        <input type="password" placeholder="Enter Password" name="pwd" required>
		<img src="eye.png" alt="sensitive content" width = "30px">
        <!-- Subcontainer for the checkbox and forgot password link -->
       <div class="subcontainer">
        <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
		<!-- Forgot Password? -->
		<label for = "forgotpassword" > Forgot Password? </label>
       </div>

            <!-- Submit buttons -->
            <button type="submit"><a href = "welcome_userprofile.php">Sign in</a></button>
    </div>
    </form>
</div>
</body>
</html>
