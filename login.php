<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" href="signUP.css">
</head>
<body>

<?php
    session_start();
    require('connection.php');

    if (isset($_POST['login_button'])) {
        $_SESSION['validate'] = false;
        $username = $_POST['username'];
        $pswrd = $_POST['pswrd'];
        $p = crud::connect()->prepare('SELECT * FROM crudtable1 WHERE username=:u AND pass=:p');
        $p->bindValue(':u', $username);
        $p->bindValue(':p', $pswrd);
        $p->execute();
        $d = $p->fetchAll(PDO::FETCH_ASSOC);
        if ($p->rowCount() > 0) {
            $_SESSION['username'] = $username;
            $_SESSION['pass'] = $pswrd;
            $_SESSION['validate'] = true;
            echo "<script>alert('Password does not match!')</script>";
            echo "<script>alert('Logged Successfully!')</script>";
            header('location:home.php');
            exit;
        } else {
            echo "<script>alert('Make sure that you are registered!')</script>";
        }
    }
?>



<!-- Logo -->
<img src="Black.png" alt="Logo" width="150" height="150">

<form action="login.php" method="post">
    <!-- Headings for the form -->
    <div class="headingsContainer">
        <h1>Login</h1>
    </div>

    <!-- Main container for all inputs -->
    <div class="mainContainer">
        <!-- Username -->
        <label for="username"> Username</label>
        <input type="text" placeholder="Enter Username" name="username" required>

        <br><br>

        <!-- Password -->
        <label for="pswrd">Password</label>
        <input type="password" placeholder="Enter Password" name="pswrd" required>

        <!-- Subcontainer for the checkbox and forgot password link -->
        <div class="subcontainer">
            <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
        </div>

        <!-- Submit button -->
        <input type="submit" value="Login" name="login_button" class="login_button">

        <form method="post" action="users.php"><p class="register">Forgot password? <a href="users.php" class="button-link">Click here</a></p></form>
    </div>
</form>

<button type="button" class="staff_button"><a href="staffNavigate.html">Staff-Login</a></button>
<script>
    // Function to set a cookie
    function setCookie(name, value, daysToExpire) {
      const expirationDate = new Date();
      expirationDate.setTime(expirationDate.getTime() + (daysToExpire * 24 * 60 * 60 * 1000));
      const expires = "expires=" + expirationDate.toUTCString();
      document.cookie = name + "=" + value + ";" + expires + ";path=/";
    }

    //  expires in 30 days
    setCookie("rememberMe", "true", 30);
    

// Function to handle staff login button click
function handleStaffLogin() {

    console.log("Staff login clicked");
}

// Add event listeners to the form and staff login button
document.querySelector('form').addEventListener('submit', handleFormSubmit);
document.querySelector('.staff_button').addEventListener('click', handleStaffLogin);

</script>
</body>
</html>