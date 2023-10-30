<!doctype html>
<html>
    <head>
    </head>
    <body>
    <link rel="stylesheet" href="../DonkeyTravels.css">
        <?php
        require "employee.php";

        $id = $_POST["id"];
        $employee1 = new employee();
        $employee1->searchEmployee($id);

        ?>
    </body>
</html>


