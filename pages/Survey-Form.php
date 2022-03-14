<html>

    <head>

        <title>

            Survey Completed!

        </title>

    </head>

    <body>

        <?php
            $SatisfactionOne = $_POST['SatisfactionOne'];

            $SatisfactionTwo = $_POST['SatisfactionTwo'];

            $Easibility = $_POST['Easibility'];
            
            $FutureUse = $_POST['FutureUse'];


            $conn = new mysqli("localhost","id17955631_hhdadmin","Gto7lpne!2000", "id17955631_exampledatabasehhd");
            // Check connection

            if ($db->connect_error) {
                die("Connection failed: " . $db->connect_error);
            } else {
                $stmt = $conn->prepare("insert into Survey_Form(SatisfactionOne, SatisfactionTwo, Easibility, FutureUse)
                    values(?,?,?,?)");
                $stmt->bind_param("iiii",$SatisfactionOne,$SatisfactionTwo,$Easibility,$FutureUse);
                $stmt->execute();
                include("SurveryPageSuccess.html");
                $stmt->close();
                $conn->close();
                }
        ?>

    </body>

</html>