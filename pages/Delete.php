<?php

include "Connection.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string

$del = mysqli_query($db,"delete from Customer_Information where id = '$id'"); // delete query

if($del)
{
    mysqli_close($db); // Close connection
    header("location:Display_Data.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>