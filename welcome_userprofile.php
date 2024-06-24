
<?php include_once'config1.php';?>

<!DOCTYPE html>
<html>
<head>
  <title>User Profile Page</title>
  <link rel="stylesheet" href="SMstrategy.css">
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
              <li><a href="welcome_userprofile.php"><b>Welcome</b></a></li>
              <li><a href="support.html">Contact</a></li>
            </ul>
          </nav>
        <!-- sign out button/search bar -->
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
			</a>
        </div>
    </header>
    <center>
        <h1> Welcome Zara! <?php echo isset($_SESSION['logged_user']) ? $_SESSION['logged_user'] : ''; ?></h1>
    </center>

    <center>
         <img src="zara.jpg" alt="zara" length="125px" width="125px">
         <h2> Sales Manager <br/>of<br/> Kylies' Textile & Garments </h2>
         <h5> Since 20th May 2018 </h5>

         <button type="submit"><a href = "SMhome.html"><b>Start</b></a></button>
    </center>


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
            <a href="https://www.linkedin.com"><img src="Linkedin.png" alt="LinkedIn"></a>
            <a href="https://www.youtube.com"><img src="Youtube.png" alt="YouTube"></a>
        </div>
    </footer>
 </body>
 </html>
