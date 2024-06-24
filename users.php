<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
    <link rel="stylesheet" href="table.css" >
</head>
<body>
     <!-- Header -->
     <header>
        <!-- Logo -->
        <div class="logo">
            <img src="Black.png" alt="Logo" height="50" width="50">
        </div>
        <!-- Buttons -->
        <nav>
            <ul>
              <li><a href="home.php">Explore</a></li>
              <li><a href="support.html">Support</a></li>
            </ul>
        </nav>
        <!-- Search Bar -->
        <div class="search-bar">
            <!-- Sign out button -->
            <a href="login.php">
            <button class="sign-out-button">Sign out</button>
            </a>
        </div>
        <!-- Icons -->
        <div class="icons">
            <!-- Notification icon -->
            <a href="profile.html">
            <button class="icon-button">
                <img src="notification.jpg" alt="Notification" class="icon-image">
            </button>
            </a>
            <!-- Profile icon -->
            <a href="profile.html">
            <button class="icon-button">
                <img src="profile.png" alt="Profile" class="icon-image">
            </button>
            </a>
        </div>
    </header>
    <table>
        <thead>
            <tr>
                <th>Email</th>
                <th>Username</th>
                <th>Password</th>
                <th>Delete</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
             
            <?php
            require('connection.php');
            $p=crud::selectdata();
            if(isset($_GET['id'])){
                $id=$_GET['id'];
                $e=crud::delete($id);
            }
            if(count($p)>0){
                for($i=0;$i<count($p);$i++){
                    echo '<tr>';
                    foreach($p[$i] as $key => $value){
                        if($key!='id'){
                            echo '<td>'.$value.'</td>';
                        }
                    }
            ?>
             <td><a href="users.php?id=<?php echo $p[$i]['id'] ?>"><img src="trash.jpg" alt=""></a></td>
             <td><a href="upDate.php"><img src="edit.png" alt=""></a></td>
                    <?php
                    echo '</tr>';
                }
            }

            ?>
            
        </tbody>
    </table>
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
                <a href="home.php">
                <button class="features-button">Features</button>
                </a>
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