<?php

include "Connection.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string

$qry = mysqli_query($db,"select * from Customer_Information where id='$id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['edit'])) // when click on Update button
{
    $Prefix = $_POST['Prefix'];
    $First_Name = $_POST['First_Name'];
    $Middle_Initial = $_POST['Middle_Initial'];
    $Last_Name = $_POST['Last_Name'];
    $Email = $_POST['Email'];
    $State = $_POST['State'];
    $Address = $_POST['Address'];
    $City = $_POST['City'];
    $Zip_Code = $_POST['Zip_Code'];
	
    $edit = mysqli_query($db,"update Customer_Information set Prefix='$Prefix', First_Name='$First_Name', Middle_Initial='$Middle_Initial', Last_Name='$Last_Name', Email='$Email', State='$State', Address='$Address', City='$City', Zip_Code='$Zip_Code' where id='$id'");
	
    if($edit)
    {
        mysqli_close($db); // Close connection
        header("location:Display_Data.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error();
    }    	
}
?>
<html>
    <head>
        <title>Updating Data!</title>
        <link rel="Shortcut Icon" href="Images/Hogg Website.png" type="image/x-icon">
    
    <style>

        .textBox {
            background-color: black;
            color:white;
            margin-left: 0px;
            margin-right: 0px;
            top: 100px;
        }

        .pBanner {
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            background-attachment: fixed;
        }

        .pBanner {
            min-height: 100px;
            background-image: url("Images/WhiteMarble.jpg");
        }

        body {
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            background-color: black;
        }

        input {
            width: 25%;
            font-size: 25px;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            text-align: center;
        }

        select {
            width: 25%;
        }

        input[type=submit] {
            background-color: white;
            border: none;
            color: black;
            padding: 16px 32px;
            text-decoration: none;
            margin: 4px 2px;
            cursor: pointer;
            text-align: center;
        }

        a:link {
            color:white;
            background-color: transparent;
        }

        a:visited {
            color: white;
            background-color: transparent;
        }

    </style>
<body>
        <img src="Images/Website Banner.png" style="width: 100%;">
        
        <div class="pBanner"></div>
        
        <div class="textBox">
            <H1 style="text-align: center; font-size: 50px;">Updating Data:</H1>

<form method="POST" style="font-size: 35px; text-align: center;">
  <input type="text" name="Prefix" value="<?php echo $data['Prefix'] ?>" placeholder="Prefix" Required> <br>
  <input type="text" name="First_Name" value="<?php echo $data['First_Name'] ?>" placeholder="First Name" Required> <br>
  <input type="text" name="Middle_Initial" value="<?php echo $data['Middle_Initial'] ?>" placeholder="Middle Intial" Required> <br>
  <input type="text" name="Last_Name" value="<?php echo $data['Last_Name'] ?>" placeholder="Last Name" Required> <br>
  <input type="text" name="Email" value="<?php echo $data['Email'] ?>" placeholder="Email" Required> <br>
  <input type="text" name="State" value="<?php echo $data['State'] ?>" placeholder="State" Required> <br>
  <input type="text" name="Address" value="<?php echo $data['Address'] ?>" placeholder="Address" Required> <br>
  <input type="text" name="City" value="<?php echo $data['City'] ?>" placeholder="City" Required> <br>
  <input type="text" name="Zip_Code" value="<?php echo $data['Zip_Code'] ?>" placeholder="Zip Code" Required> <br>
  <br>
  <input type="submit" name="edit" value="Submit!">
</form>
</body>
</html>