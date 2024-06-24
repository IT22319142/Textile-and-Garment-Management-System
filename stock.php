<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles2.css">
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
              <li><a onclick="location.href='/production/mhome.html'">Home</a></li>
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
    <h2>Stock Details</h2>
    <table>
        <thead>
        <tr>
            <th>Matiriel_ID</th>
            <th>Available Volume</th>
            <th>Quality</th>
            <th>Expire Date</th>
        </tr>
        </thead>
        <tbody>
            <?php
            $servername="localhost";
            $username="root";
            $password="";
            $database="stocks";

            //create connection
            $connection = new mysqli($servername, $username, $password, $database);
            
            //check connection
            if ($connection->connect_error) {
                die("Connection failed: " . $connection->connect_error);
            }
            
            $sql = "SELECT * FROM materials";
            $result = $connection->query($sql);

            if (!$result) {
                die("Query failed: " . $connection->error);
            }

            //read data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr>               	
                    <td>". $row["Material_ID"]."</td>
                    <td>". $row["AvailableVolume"]."</td>
                    <td>". $row["Quality"]."</td>
                    <td>". $row["ExpireDate"]."</td>                    
            </tr>"
            ;
            }
           
        ?>  
        </tbody>
    </table><br>

    <div class="button-container">
        <button>Previous</button>
        <button>PAGE 01</button>
        <button>Next</button>
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
