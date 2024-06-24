<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="styles1.css">
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
              <li><a href="mhome.html">Home</a></li>
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
    <div class="form-container">
        <div class="form-wrapper">
            
            <h2>Production Plan</h2>
            <form method="post">

                <label for="pid">Plan_ID:</label>
                <input placeholder="" type="text" id="pid" name="Plan_ID" value="">

                <label for="sdate">Starting date</label>
                <input placeholder="" type="text" id="sdate" name="Starting_Date" value="">

                <label for="edate">Ending date</label>
                <input placeholder="" type="text" id="edate" name="Ending_Date" value="">

                <label for="pplan">Progrss Percentage</label>
                <input placeholder="" type="text" id="ppercent" name="Progress_Percentage" value="">

                <label for="panalytics">Labour Hours</label>
                <input placeholder="" type="text" id="lhours" name="Labour_Hours" value="">

                <br>

                <input type="submit"  value="Submit">
            </form>
        </div>
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
