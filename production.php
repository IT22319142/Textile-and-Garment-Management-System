<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
    
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
              <li><a onclick="location.href='mhome.php'>Home</a></li>
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
    <h2>Production Plan</h2>
    <div class="button-container1">
        <button onclick="location.href='updatenew.php'">New Production Plan</button>
    </div>

    <table>
        <thead>
        <tr>
            <th>Plan_ID</th>
            <th>Starting Date</th>
            <th>Ending Date</th>
            <th>Progress Percentage</th>
            <th>Labour Hours</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    <?php
            $servername="localhost";
            $username="root";
            $password="";
            $database="production";

            //create connection
            $connection = new mysqli($servername, $username, $password, $database);
            
            //check connection
            if ($connection->connect_error) {
                die("Connection failed: " . $connection->connect_error);
            }
            
            $sql = "SELECT * FROM productionplans";
            $result = $connection->query($sql);

            if (!$result) {
                die("Query failed: " . $connection->error);
            }

            //read data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                <td>$row[Plan_ID]</td>
                <td>$row[Starting_Date]</td>
                <td>$row[Ending_Date]</td>
                <td>$row[Progress_Percentage]</td>
                <td>$row[Labour_Hours]</td>
                <td>
                    <div class='button-container'>
                        <button class='button' onclick=\"location.href='updatenew.php?$row[Plan_ID]'\">update</button>
                        <button class='button' onclick=\"location.href='/production/delete?$row[Plan_ID]'\">delete</button>
                    </div>
                </td>
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
