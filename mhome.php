<!DOCTYPE html>
<html lang="en">
<head>
    <title>contract</title>
    <link rel="stylesheet" href="mhome.css">
</head>
<body>
    <header>
        <!-- Logo -->
        <div class="logo">
            <img src="Black.png" alt="Logo" height="50" width="50">
        </div>
        <!-- Buttons -->
        <nav>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">About us</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
          </nav>
        <!-- sing out button -->
        <div class="search-bar">
            <input type="text" placeholder="search..">
            <button class="sign-out-button">Sign out</button>
        </div>
        <!-- Icons -->
        <div class="icons">
            <button class="icon-button">
                <img src="notification.jpg" alt="Notification" class="icon-image">
            </button>
            <button class="icon-button">
                <img src="profile.png" alt="Profile" class="icon-image">
            </button>
        </div>
    </header>
    <h1>Manufacture Home page</h1>
    
    <div class="button-container">
    <button class="button" onclick="location.href='/stock.php'">stock details</button>
    <button class="button" onclick="location.href='production.php'">Production Plan details</button>
    <button class="button" onclick="location.href='/work.php'">work management details</button>
</div>

    <!-- Footer -->
    <footer>
        <!-- Footer Left -->
        <div class="footer-left">
            <img src="Black.png" alt="Logo">
        </div>
        <!-- Footer Right -->
        <div class="footer-right">
            <!-- Product -->
            <div class="footer-heading">
                <h3>Product</h3>
                <button class="features-button">Features</button>
            </div>
            <!-- Call Company -->
            <div class="footer-heading">
                <h3>Call Company</h3>
                <button class="about-button">About</button>
                <button class="join-us-button">Join Us</button>
            </div>
            <!-- Subscribe to Newsletter -->
            <div class="footer-heading">
                <h3>Subscribe to Our Newsletter</h3>
                <div class="newsletter-form">
                    <input type="email" placeholder="Enter your email">
                    <button class="subscribe-button">Subscribe</button>
                </div>
            </div>
        </div>
        <!-- Copyright -->
        <p>&copy; 2022 Brand, Inc. | <a href="#">Privacy</a> | <a href="#">Terms</a> | <a href="#">Sitemap</a></p>
        <!-- Social Media Buttons -->
        <div class="social-media-buttons">
            <a href="https://www.facebook.com"><img src="Facebook.png" alt="Facebook"></a>
            <a href="https://www.linkedin.com"><img src="linkedin.png" alt="LinkedIn"></a>
            <a href="https://www.youtube.com"><img src="youtube.png" alt="YouTube"></a>
        </div>
    </footer>
</body>
</html>
