<?php include_once 'config1.php'; ?>

<?php
    $SID = $_GET['sid'];

    $query = "delete from salesstrategy where SID='$SID'";

    $data = mysqli_query($conn, $query);

    if ($data) 
    {
        echo "<script>alert('Record Deleted Successfuly!')</script>";
        header('Location:strategy.php');
    } 
    else 
    {
        echo "<script>alert('Error in Delete')</script>";
    }
    //close the connection
    mysqli_close($conn);

?>

