<html>

    <head>

        <title>

            Successfully Submitted!

        </title>
    
    </head>

    <body>

        <?php

        

            

            $Prefix = $_POST['Prefix'];

            $First_Name = $_POST['First_Name'];
            
            $Middle_Initial = $_POST['Middle_Initial'];

            $Last_Name = $_POST['Last_Name'];

            $Email = $_POST['Email'];

            $State = $_POST['State'];

            $Address = $_POST['Address'];

            $City = $_POST['City'];

            $Zip_Code = $_POST['Zip_Code'];

            $conn = new mysqli("localhost","id17955631_hhdadmin","Gto7lpne!2000", "id17955631_exampledatabasehhd");
            // Check connection

            if ($db->connect_error) {
                die("Connection failed: " . $db->connect_error);
            } else {
                $stmt = $conn->prepare("insert into Customer_Information(Prefix, First_Name, Middle_Initial, Last_Name, Email, State, Address, City, Zip_Code)
                    values(?,?,?,?,?,?,?,?,?)");
                $stmt->bind_param("ssssssssi",$Prefix, $First_Name, $Middle_Initial, $Last_Name, $Email, $State, $Address, $City, $Zip_Code);
                $stmt->execute();
                include("SubmitOrderSuccess.html");
                $stmt->close();
                $conn->close();
                }
        ?>

    </body>

</html>