<!DOCTYPE html>
<html>
<head>
  <title>Home</title>
  <link rel="stylesheet" href="SMhome.css">
  <style>
    .box1
	{
	  border:2px solid black;
	  width: 1200px;
      height: 750px;
	  background-color:white;
      padding: 50px;
      margin: 100px;
	 }
    .container {
      display: flex;
      justify-content: space-between;
      
    }

    .box {
      width: 45%;
	  height:300px;
      padding: 20px;
      border: 1px solid black;
      border-radius: 5px;
    }

    .title {
      font-weight: bold;
      margin-bottom: 100px;
    }

    .paragraph {
      margin-bottom: 10px;
    }

    #button-container {
      text-align: center;
      margin-top: 5px;
    }

    #view-button {
      padding: 10px 20px;
	  margin:40px;
      font-size: 16px;
      border: none;
      border-radius: 5px;
      background-color: #4CAF50;
      color: white;
      cursor: pointer;
    }
  </style>
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
              <li><a href="SMhome.html"><b>Home</b></a></li>
              <li><a href="#">Contact</a></li>
            </ul>
          </nav>
        <!-- sign out button/search bar -->
        <div class="search-bar">
			<input type="text" placeholder="Search...">
			<a href="signin.php">
            <button class="sign-out-button"><a href = "SMsignin.html">Sign out</a></button>
        </div>
        <!-- Icons -->
        <div class="icons">
            <button class="icon-button">
                <img src="notification.jpg" alt="Notification" class="icon-image">
            </button>
            <button class="icon-button">
                <img src="userIcon.png" alt="Profile" class="icon-image">
            </button>
        </div>
    </header>
  <div class = "box1">
  <div class="container">
    <div class="box">
      <h2 class="title">Number Of Products</h2>
	  <center>
      <p class="paragraph">Paragraph 1</p>
      <p class="paragraph">Paragraph 2</p>
      <p class="paragraph">Paragraph 3</p>
    </div>
    <div class="box">
      <h2 class="title">Increment Of Sales</h2>
	   <center>
      <p class="paragraph">Paragraph 4</p>
      <p class="paragraph">Paragraph 5</p>
      <p class="paragraph">Paragraph 6</p>
    </div>
  </div>
    <div class="container">
    <div class="box">
      <h2 class="title">Decrement Of Sales</h2>
	   <center>
      <p class="paragraph">Paragraph 1</p>
      <p class="paragraph">Paragraph 2</p>
      <p class="paragraph">Paragraph 3</p>
    </div>
    <div class="box">
      <h2 class="title">Number Of Strategies have been incremented</h2>
	   <center>
      <p class="paragraph">Paragraph 4</p>
      <p class="paragraph">Paragraph 5</p>
      <p class="paragraph">Paragraph 6</p>
    </div>
  </div>
	<center>
    <button class="button container" onclick="window.location.href='strategy.php'">View Sales Strategy</button>
  
 
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
            <a href="https://www.linkedin.com"><img src="Linkedin.png" alt="LinkedIn"></a>
            <a href="https://www.youtube.com"><img src="Youtube.png" alt="YouTube"></a>
        </div>
    </footer>
 </body>
 </html>