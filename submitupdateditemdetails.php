<?php include_once'config1.php';?>

<?php
    if($_GET['submit'])
    {
        $sid=$_GET['sid'];
        $pid=$_GET['pid'];
        $price = $_GET['price'];
        $previoussales = $_GET['previoussales'];
        $currentsales = $_GET['currentsales'];
        $difference = $_GET['difference'];
        $solutionstrategy = $_GET['solutionstrategy'];
        
        $query = "UPDATE salesstrategy SET
                    PID='$sid',
                    Price='$price',
                    Previous_Sales='$previoussales',
                    Current_Sales='$currentsales',
                    Difference='$difference',
                    Solution_Strategy='$solutionstrategy' WHERE
                    SID='$sid'";
        
        $data=mysqli_query($conn,$query);
        
        if($data)
        {
            echo "<script>alert('Record Updated Successfully !')</script>";
            header('Location:strategy.php');
            
        }
        else
        {
            echo "<script>alert('Update Unsuccessful !')</script>";
        }
    }
    //Close the connection
    mysqli_close($conn);

?>
