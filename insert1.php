<?php include_once'config1.php'; 

$pid = $_POST["pid"];
$price = $_POST["price"];
$previoussales = $_POST["previoussales"];
$currentsales = $_POST["currentsales"];
$difference = $_POST["difference"];
$solutionstrategy = $_POST["solutionstrategy"];

$sql2 = "INSERT INTO salesstrategy(SID,PID,Price,Previous_Sales,Current_Sales,Difference,Solution_Strategy) 
VALUES ('','$pid', '$price', '$previoussales', '$currentsales ', '$difference','$solutionstrategy') ";

//Execute the Query
if(mysqli_query($conn,$sql2))
{
        echo"<script> alert('Record Inserted Successfully!!') </script>";
        header('location:strategy.php');
        exit;    
}
else
{
        echo"<script> alert('Error in Insertion!!') </script>";
}

    //Close the conection
    mysqli_close($conn);

?>
