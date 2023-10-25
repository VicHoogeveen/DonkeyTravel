<!doctype html>
<html>
<head>
</head>
    <body>
    <link rel="stylesheet" href="../DonkeyTravels.css">
        <?php
        require "employee.php";

        $id = $_POST["id"];
        $delete = $_POST["deleteBox"];

        if ($delete == "yes") {
            echo "The employee is removed <br/>";
            $customer1 = new employee();
            $customer1->deleteEmployee($id);
        } else {
            echo "The employee hasn't been removed. <br/>";
        }
        ?>
    </body>
</html>
