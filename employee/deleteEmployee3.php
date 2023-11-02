<!doctype html>
<html>
<head>
</head>
    <body>
    <link rel="stylesheet" href="../DonkeyTravels.css">
    <div class="topnav" id="myTopNav">
        <nav>
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="../users">Users</a></li>
            </ul>
        </nav>
    </div>
    <br>
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
    <br>
     <a href="indexEmployee.php">Go to the beginning page of Employees</a>
    </body>
<footer> You can contact us on the following email en number : <br>
    Phone Number, ########### or DonkeyTravelBookings@gmail.com</footer>
</html>
