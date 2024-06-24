<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>explore</title>
    <link rel="stylesheet" href="home.css">
</head>
<body>
     <!-- Header -->
     <header>
        <!-- Logo -->
        <div class="logo">
            <img src="Black.png" alt="Logo" height="50" width="50">
        </div>
        <!-- Search Bar -->
        <div class="search-bar">
            <input type="text" placeholder="Search...">
            <a href="product.html">
                <button class="explore-button">Explore</button>
            </a>
           
        </div>
        <!-- Icons -->
        <div class="icons">
            <a href="profile.html">
                <button class="icon-button">
                    <img src="notification.jpg" alt="Notification" class="icon-image">
                </button>
            </a>
            
        <form method="post" action="users.php">
        <button type="submit" name="submit" class="icon-button">
        <img src="profile.png" alt="Profile" class="icon-image">
            Go to Users
        </button>
        </form>
            
        </div>
    </header>

    <!-- Main Content -->
    <h1 class="main-heading">Explore Collections</h1>
    <nav class="navigation-bar">
        <!-- Navigation buttons -->
        <a href="home.php">
        <button class="navigation-button">All</button>
        </a>
        <a href="create.html">
        <button class="navigation-button">Create</button>
        </a>
        <!-- Filter bar -->
        <div class="filter-bar">
            <div class="filter-options">
                <label for="filter-color">Color:</label>
                <select id="filter-color">
                    <option value="all">All</option>
                    <option value="red">Red</option>
                    <option value="blue">Blue</option>
                    <option value="green">Green</option>
                </select>
                <label for="filter-size">Size:</label>
                <select id="filter-size">
                    <option value="all">All</option>
                    <option value="small">Small</option>
                    <option value="medium">Medium</option>
                    <option value="large">Large</option>
                </select>
            </div>
            <input type="text" class="search-bar" placeholder="Search...">
            <span class="sort-by-text">Sort By:</span>
            <select class="sort-dropdown">
                <option value="newest">Newest</option>
                <option value="popular">Most Popular</option>
                <option value="rating">Highest Rating</option>
            </select>
        </div>
        <form method="post" action="login.php">
        <button type="submit" name="submit" class="signout-button">
            sign out
        </button>
        </form>
           
        

    </nav>

    <!-- Image Grid -->
    <div class="image-grid">
        <!-- Images with name and description -->
        <div class="image-container">
            <img src="image1.png" alt="Image 1">
            <a href="product.html" class="button-link">
                <h3 class="button-heading">White Range</h3>
            </a>
            <p class="image-description">Nike Dri-FIT Tour</p>
        </div>
        <div class="image-container">
            <img src="jumpsuit.png" alt="Image 1">
            <a href="product.html" class="button-link">
            <h3 class="button-heading">Jumpsuits</h3>
            </a>
            <p class="image-description">Jordan x Teyana Taylor</p>
        </div>
        <div class="image-container">
            <img src="nocta-knit-top.png" alt="Image 1">
            <a href="product.html" class="button-link">
            <h3 class="button-heading">Knit Tops</h3>
            </a>
            <p class="image-description">NOCTA</p>
        </div>
        <div class="image-container">
            <img src="nocta-tracksuit-bottoms.png" alt="Image 1">
            <a href="product.html" class="button-link">
            <h3 class="button-heading">Tracksuit-Bottoms</h3>
            </a>
            <p class="image-description">Apparel Collection</p>
        </div>
        <div class="image-container">
            <img src="printed-shorts.png" alt="Image 1">
            <a href="product.html" class="button-link">
            <h3 class="button-heading">Printed-Shorts</h3>
            </a>
            <p class="image-description">Naomi Osaka</p>
        </div>
        <div class="image-container">
            <img src="shorts.png" alt="Image 1">
            <a href="product.html" class="button-link">
            <h3 class="button-heading">Shorts</h3>
            </a>
            <p class="image-description">Nike Solo Swoosh</p>
        </div>
        <div class="image-container">
            <img src="short-sleeve.png" alt="Image 1">
            <a href="product.html" class="button-link">
            <h3 class="button-heading">Short-Sleeves</h3>
            </a>
            <p class="image-description">Naomi Osaka</p>
        </div>
    </div>
    <div>
        <button class="view-more-button">View More</button>
    </div>

    <!-- Top Designs -->
    <div class="top-designs">
        <h3>Top Designs</h3>
        <div class="top-designs-grid">
            <!-- Images with name and price -->
            <div class="top-design">
                <img src="hooded-jacket.png" alt="Design 1">
                <div class="design-details">
                    <a href="product.html" class="button-link">
                    <h4 class="button-heading">Hooded-Jacket</h4>
                    </a>
                    <p class="design-price">Rs.5000.00</p>
                </div>
            </div>
            <div class="top-design">
                <img src="one-high-rise-leggings.png" alt="Design 2">
                <div class="design-details">
                    <a href="product.html" class="button-link">
                    <h4 class="button-heading">Leggings</h4>
                    </a>
                    <p class="design-price">Rs.6000.00</p>
                </div>
            </div>
            <div class="top-design">
                <img src="sportswear.png" alt="Design 3">
                <div class="design-details">
                    <a href="product.html" class="button-link">
                    <h4 class="button-heading">Sportswear</h4>
                    </a>
                    <p class="design-price">Rs.4000.00</p>
                </div>
            </div>
        </div>
        <div class="top-designs-grid">
            <!-- images with name and price -->
            <div class="top-design">
                <img src="trousers.png" alt="Design 4">
                <div class="design-details">
                    <a href="product.html" class="button-link">
                    <h4 class="button-heading">Trousers</h4>
                    </a>
                    <p class="design-price">Rs.8000.00</p>
                </div>
            </div>
            <div class="top-design">
                <img src="sportswear-hoodie.png" alt="Design 5">
                <div class="design-details">
                    <a href="product.html" class="button-link">
                    <h4 class="button-heading">Sportswear-Hoodie</h4>
                    </a>
                    <p class="design-price">Rs.7000.00</p>
                </div>
            </div>
            <div class="top-design">
                <img src="sportswear-club-fleece.png" alt="Design 6">
                <div class="design-details">
                    <a href="product.html" class="button-link">
                    <h4 class="button-heading">Club-Fleece</h4>
                    </a>
                    <p class="design-price">Rs.10000.00</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Create Your Own Design -->
    <div class="create-your-own">
        <h3>Create Your Own Design</h3>
        <p class="create-description">Unleash your creativity and design your unique masterpiece! Our platform allows you to bring your imagination to life and create personalized designs that truly reflect your style. Whether you're an aspiring artist or just looking to add a personal touch to your belongings, our easy-to-use design tools and resources are here to help you every step of the way.</p>
        <a href="create.html">
        <button class="upload-button">Upload</button>
        </a>
        <img src="create-concept.jpg" alt="Your Design" class="design-image">
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
                <a href="home.php" class="button-link">
                <button class="features-button">Features</button>
                </a>
            </div>
            <!-- Call Company -->
            <div class="footer-heading">
                <h3>Call Company</h3>
                <a href="about us.html" class="button-link">
                <button class="about-button">About</button>
                </a>
                <a href="signUP.php" class="button-link">
                <button class="join-us-button">Join Us</button>
                </a>
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
</body>
</html>