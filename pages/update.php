<?php
include 'Connection.php';
if(count($_POST)>0) {
    mysqli_query($conn,"UPDATE Customer_Information set Prefix='" . $_POST['Prefix'] . "', First_Name='" . $_POST['First_Name'] . "',
    Middle_Initial='" . $_POST['Middle_Initial'] . "', Last_Name='" . $_POST['Last_Name'] . "', Email='" . $_POST['Email'] . "',
    State='" . $_POST['State'] . "', Address='" . $_POST['Address'] . "', City='" . $_POST['City'] . "',
    Zip_Code='" . $_POST['Zip_Code'] . "' WHERE id='" . $_POST['id'] . "'");
    $message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM Customer_Information WHERE $id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>

<html>
    <head>
        <title>Update Customer Information</title>
    </head>
<body>
    <form name="frmUser" method="post" action="">
    <div><?php if(isset($message)) { echo $message; } ?>
    </div>
    <div style="padding-bottom:5px;">
    <a href="Display_Data.php">Return to Customer Information!</a>
    </div>
    

    <input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>">
    
    Prefix: <br>
    <select name="Prefix" required>
                    <option value=" " selected></option>
                    <option value="Mr.">Mr.</option>
                    <option value="Mrs.">Mrs.</option>
                    <option value="Other">Other</option>
                    </select>
    </br>

    First Name: <br>
    <input type="text" name="First_name" class="txtField" value="<?php echo $row['First_name']; ?>">
    <br>
    
    Middle Initial: <br>
    <input type="text" name="Middle_Initial" class="txtField" value="<?php echo $row['Middle_Initial']; ?>">
    <br>
    
    Last Name :<br>
    <input type="text" name="Last_name" class="txtField" value="<?php echo $row['Last_name']; ?>">
    <br>
    
    Email:<br>
    <input type="text" name="Email" class="txtField" value="<?php echo $row['Email']; ?>">
    <br>
    
    State:<br>
    <select name="State" required>
    <option value=" " selected></option>
        <option value="Alabama">Alabama</option>
        <option value="Alaska">Alaska</option>
        <option value="Arizona">Arizona</option>
        <option value="Arkansas">Arkansas</option>
        <option value="California">California</option>
        <option value="Colorado">Colorado</option>
        <option value="Connecticut">Connecticut</option>    
        <option value="Delaware">Delaware</option>
        <option value="Florida">Florida</option>
        <option value="Georgia">Georgia</option>
        <option value="Hawaii">Hawaii</option>
        <option value="Idaho" >Idaho</option>
        <option value="Illinois">Illinois</option>
        <option value="Indiana">Indiana</option>
        <option value="Iowa">Iowa</option>
        <option value="Kansas">Kansas</option>
        <option value="Kentucky">Kentucky</option>
        <option value="Louisiana">Louisiana</option>
        <option value="Maine">Maine</option>
        <option value="Maryland">Maryland</option>
        <option value="Massachusetts">Massachusetts</option>
        <option value="Michigan">Michigan</option>
        <option value="Minnesota">Minnesota</option>
        <option value="Mississippi">Mississippi</option>
        <option value="Missouri">Missouri</option>
        <option value="Montana">Montana</option>
        <option value="Nebraska">Nebraska</option>
        <option value="Nevada" >Nevada</option>
        <option value="New Hampshire">New Hampshire</option>
        <option value="New Jersey">New Jersey</option>
        <option value="New Mexico">New Mexico</option>
        <option value="New York">New York</option>
        <option value="North Carolina">North Carolina</option>
        <option value="North Dakota">North Dakota</option>
        <option value="Ohio">Ohio</option>
        <option value="Oklahoma">Oklahoma</option>
        <option value="Oregon">Oregon</option>
        <option value="Pennsylvania">Pennsylvania</option>
        <option value="Rhode Island">Rhode Island</option>
        <option value="South Carolina">South Carolina</option>
        <option value="South Dakota">South Dakota</option>
        <option value="Tennessee">Tennessee</option>
        <option value="Texas">Texas</option>
        <option value="Utah">Utah</option>
        <option value="Vermont">Vermont</option>
        <option value="Virginia">Virginia</option>
        <option value="Washington">Washington</option>
        <option value="West Virgina">West Virginia</option>
        <option value="Wisconsin">Wisconson</option>
        <option value="Wyoming">Wyoming</option>
        </select>
    <br>
    
    Address: <br>
    <input type="text" name="Address" class="txtField" value="<?php echo $row['Address']; ?>">
    <br>
    
    City: <br>
    <input type="text" name="City" class="txtField" value="<?php echo $row['City']; ?>">
    <br>
    
    Zip Code: <br>
    <input type="text" name="Zip_Code" class="txtField" value="<?php echo $row['Zip_Code']; ?>">
    <br>

    <input type="submit" name="submit" value="Submit" class="buttom">

    </form>
</body>
</html>