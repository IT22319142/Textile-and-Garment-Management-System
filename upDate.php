<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign UP page</title>
    <link rel="stylesheet" href="signUP.css">
</head>
<body>
<?php
    require('connection.php');
    if (isset($_POST['signUP_button'])){
        $email = $_POST['email'];
        $username = $_POST['username'];
        $pswrd = $_POST['pswrd'];
        $confipswrd = $_POST['confipswrd'];
        if (!empty($_POST['email']) && !empty($_POST['username']) && !empty($_POST['pswrd'])){
            if ($pswrd == $confipswrd){
                $p = crud::connect()->prepare('UPDATE crudtable1 SET email=:e,username=:u,pass=:p');
                $p->bindValue(':e', $email);
                $p->bindValue(':u', $username);
                $p->bindValue(':p', $pswrd);
                $p->execute();
                echo 'Successfully Updated';
                header('location:home.php');
                exit;
            } else {
                echo 'Password does not match!';
            }
        }
    }
?>

<script>
    // Function to set a cookie
    function setCookie(name, value, daysToExpire) {
      const expirationDate = new Date();
      expirationDate.setTime(expirationDate.getTime() + (daysToExpire * 24 * 60 * 60 * 1000));
      const expires = "expires=" + expirationDate.toUTCString();
      document.cookie = name + "=" + value + ";" + expires + ";path=/";
    }

    // Get the form element
    const form = document.querySelector('form');

    // Add an event listener for form submission
    form.addEventListener('submit', function(event) {
      // Get the username value from the input field
      const usernameInput = document.querySelector('input[name="username"]');
      const usernameValue = usernameInput.value;

      // Set the username cookie with the value entered
      setCookie('username', usernameValue, 30);
    });
</script>

<img src="Black.png" alt="Logo" width="150" height="150">
  
  <form action="" method="post">
      <!-- Headings for the form -->
      <div class="headingsContainer">
          <h1>Update an account</h1>
      </div>

      <!-- Main container for all inputs -->
      <div class="mainContainer">
         
          <!-- Email -->
          <label for="email">Email</label>
          <input type="text" placeholder="Enter email" name="email" required>
         <!-- Username -->
            <label for="username">Username</label>
          <input type="text" placeholder="Enter Username" name="username" required>

          <br><br>

          <!-- Password -->
          <label for="pswrd">Password</label>
          <input type="password" placeholder="Enter Password" name="pswrd" required>
        
          <label for="confipswrd">Confirm Password</label>
          <input type="password" placeholder="Re-Enter Password" name="confipswrd" required>
          <!-- Sub container for the checkbox and forgot password link -->
          <div class="subcontainer">
              <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
              </label>
          </div>

          <!-- Submit button -->
          <!--<a href="explore.html">-->
          <input type="submit" value="UPDATE" name="signUP_button" class="update_button">
          
          <!-- Sign up link -->
          <p class="register">Been here before? <a href="login.php" class="button-link">Log in</a></p>
      </div>
  </form>
</body>
</html>