<?php include_once'config1.php';?>

<!DOCTYPE html>
<html>
<head>
  <title>Sales Strategy Page</title>
  <link rel="stylesheet" href="SMstrategy.css">
	<style>
		table, th, td 
		{
		  border:1px solid black;
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
              <li><a href="strategy.php"><b>Sales Strategy</b></a></li>
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
	<h2>Strategy Table</h2>
<!--Create Strategy Table-->
	<table style="width:100%">
		<tr>
			<th> SID </th>
			<th> PID </th>
			<th> Price </th>
			<th> Previous_Sales </th>
			<th> Current_Sales</th>
			<th> Difference </th>
			<th> Solution_Strategy </th>
			<th> Update_Sales_Strategy </th>
			<th> Delete_Item </th>
		</tr>
    
	<!--PHP Query-->
    <?php 
      $sql="select * from salesstrategy";
      $result=$conn->query($sql);

      if($result->num_rows>0)
      {
          while($row=$result->fetch_assoc())
          {
              echo"<tr><td>".$row["SID"]."</td><td>".$row["PID"]."</td><td>".$row["Price"]."</td><td>".$row["Previous_Sales"]."</td><td>".$row["Current_Sales"]."</td><td>".$row["Difference"]."</td><td>".$row["Solution_Strategy"]."</td>";
              
              echo "<td><a href='update2.php? sid=$row[SID] &pid=$row[PID] &price=$row[Price] &previoussales=$row[Previous_Sales] 
              &currentsales=$row[Current_Sales] &difference=$row[Difference] &solutionstrategy=$row[Solution_Strategy]'><center>Update</center></a></td>";
              
              echo "<td><a href='delete1.php? sid=$row[SID]'><center>Delete</center></a></td></tr>";
          }
      }

      else
      {
          echo "Empty Rows";
      }
  
  echo"</table>";

  
  mysqli_close($conn);         
?> 

</table>
<!--Back Button-->
<button class="back Button" onclick="window.location.href='SMhome.html'"><b>Back</b></button>
   
<!--Add New Sales Item Button-->	  
<button <button class="addNewItem Button" onclick="window.location.href='SMinsert.html'"><b>Add New Sales Item</b></button>
 
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
