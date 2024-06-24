<?php include_once'config1.php'; ?>

<?php
    $sid = $_GET['sid'];
    $pid = $_GET['pid'];
    $price = $_GET['price'];
    $previoussales = $_GET['previoussales'];
    $currentsales = $_GET['currentsales'];
    $difference = $_GET['difference'];
    $solutionstrategy = $_GET['solutionstrategy'];
?>

<!DOCTYPE html>
<html>
<head>
  <title>Update</title>
  <link rel="stylesheet" href="SMupdate.css">

</head>
<body>
<!-- Header -->
    <header>
        <!-- Logo -->
        <div class="logo">
            <img src="logo.png" alt="Logo" height="50" width="50">
        </div>
        <!-- Buttons -->
        <nav>
            <ul>
              <li><a href="SMupdate.html"><b>Update</b></a></li>
              <li><a href="support.html">Contact</a></li>
            </ul>
          </nav>
        <!-- sing out button/search bar -->
        <div class="search-bar">
			<input type="text" placeholder="Search...">
            <button class="sign-out-button"><a href = "SMsignin.html">Sign out</a></button>
        </div>
        <!-- Icons -->
        <div class="icons">
            <!-- Notification Icon -->
			      <a href="welcome_userprofile.php">
            <button class="icon-button">
            <img src="notification.jpg" alt="Notification" class="icon-image">
            </button>
            </a>
			<!-- Profile Icon -->
			<a href="welcome_userprofile.php">
			<button class="icon-button">
            <img src="userIcon.png" alt="Profile" class="icon-image">
			</button>
			</a
        </div>
    </header>
    <h3>Update Sales Item</h3>   
    <div class = "salesdata tbl" style ="border-style:groove;border-color:Darkblue;">
    <br/><br/><br/><br/>
    <!--Create Form-->
  <center>
    <form name="updateform" action="submitupdateditemdetails.php" method = "GET" >
    <table border="0" width="25%">
    <tr>
        <td>SID</td>
        <td><input type="text"value="<?php echo "$sid"?>"name="sid" readonly></td>
    </tr>
    <tr>
        <td>PID</td>
        <td><input type="text" value="<?php echo "$pid"?>"name="pid" ></td>
    </tr>
    <tr>
        <td>Price</td>
        <td><input type="text" value="<?php echo "$price"?>"name="price" ></td>
    </tr>
    <tr>
        <td>Previous Sales</td>
        <td><input type="text"value="<?php echo "$previoussales"?>"name="previoussales" ></td>
    </tr>
    <tr>
        <td>Current Sales</td>
        <td><input type="text" value="<?php echo "$currentsales"?>"name="currentsales" ></td>
    </tr>
    <tr>
        <td>Difference</td>
        <td><input type="text" value="<?php echo "$difference"?>"name="difference" ></td>
    <tr>
        <td>Solution Strategy</td>
        <td><textarea value="<?php echo "$solutionstrategy"?>"name="solutionstrategy" ></textarea></td>
    </tr>
    <tr>
        <td>Update</td>
        <td><input type="submit" value="update" name="submit"></td>
    </tr>

    </table>
    </form>
</center>
<br/><br/><br/><br/><br/><br/>
	<hr id = "test"/>
  
  
<!-- Footer-->
	  <footer>
        <!-- Footer Left -->
        <div class="footer-left">
            <img src="logo.png" alt="Logo">
        </div>
        <!-- Footer Right -->
        <div class="footer-right">
            <!-- Product -->
            <div class="footer-heading">
            <h3>Product</h3>
            <a href="home.php">
            <button class="features-button">Features</button>
            </a>
            </div>
            <!-- Call Company -->
            <div class="footer-heading">
            <h3>Call Company</h3>
            <a href = "about%20us.html">
            <button class="about-button">About</button>
            </a>
            <a href = "signUP.php">
            <button class="join-us-button">Join Us</button>
            </a>
            </div>
            <!-- Subscribe to Newsletter -->
            <div class="footer-heading">
                <h3>Subscribe to Our Newsletter</h3>
                <div class="newsletter-form">
                    <input type="email" placeholder="Enter your email">
                    <a href = "signUP.php">
                    <button class="subscribe-button">Subscribe</button>
                    </a>
                </div>
            </div>
        </div>
        <!-- Copyright -->
        <p>&copy; 2022 Brand, Inc. | <a href="support.html#">Privacy</a> | <a href="support.html#">Terms</a> | <a href="support.html#">Sitemap</a></p>
        <!-- Social Media Buttons -->
        <div class="social-media-buttons">
            <a href="https://www.facebook.com"><img src="Facebook.png" alt="Facebook"></a>
            <a href="https://www.linkedin.com"><img src="linkedin.png" alt="LinkedIn"></a>
            <a href="https://www.youtube.com"><img src="youtube.png" alt="YouTube"></a>
        </div>
    </footer>
 </body>
 </html>