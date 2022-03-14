<!DOCTYPE HTML>
<html>
    <head>
        <title>Data Displayed...</title>
        <style type="text/css">
            table {
                border-collapse: collapse;
                width: 100%;
                Color: white;
                font-family: monospace;
                font-size:15px;
                text-align: center;
            }

            th { 
                background-color: black;
                color: white;
            }

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

            a:link {
            color:white;
            background-color: transparent;
            }

            a:visited {
            color: white;
            background-color: transparent;
            }

            .button {
            background-color: grey;
            border: none;
            color: white;
            padding: 2px 2px;
            text-decoration: none;
            cursor: pointer;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            }

            tr:nth-child(even) {background-color: white; color:black;}
        </style>
    </head>

    <body>
    <img src="Images/Website Banner.png" style="width: 100%;">
        
        <div class="pBanner"></div>

        <table>
            <tr>
                <th>ID </th>
                <th>Prefix</th>
                <th>First Name</th>
                <th>Middle Initial</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>State</th>
                <th>Address</th>
                <th>City</th>
                <th>Zip Code</th>
                <th colspan="2">Operations</th>
            </tr>


<?php
$conn = new mysqli("localhost","id17955631_hhdadmin","Gto7lpne!2000", "id17955631_exampledatabasehhd");
$sql = "SELECT * FROM Customer_Information";
$result = $conn-> query($sql);

if ($result -> num_rows > 0) {
    while ($row = $result-> fetch_assoc()) {
        echo "<tr>
        <td>" . $row['id'] . "</td>
        <td>" . $row['Prefix'] . "</td>
        <td>" . $row["First_Name"] . "</td>
        <td>" . $row["Middle_Initial"] . "</td>
        <td>" . $row["Last_Name"] . "</td>
        <td>" . $row["Email"] . "</td>
        <td>" . $row["State"] . "</td>
        <td>" . $row["Address"] . "</td>
        <td>" . $row["City"] . "</td>
        <td>" . $row["Zip_Code"] . "</td>
        <td>" ?> <a href="edit.php?id=<?php echo $row["id"]; ?>"><button type="button">Edit</button> <?php echo "</td>
        <td>" ?> <a href="Delete.php?id=<?php echo $row["id"]; ?>"><button type="button">Delete</button> <?php echo "</td>
        </tr>";
    }
}
else {
    echo "No Results!";
}
$conn->close();

?>
        </table>
        <br>
        <br>
    <H2 style="text-align: center; font-size: 20px;"><a href="HoggWebsite.html">Click here to return to home page!</a></H2>
    <br>
    </body>
</html>