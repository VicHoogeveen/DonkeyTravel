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
        $employee1 = new employee();
        $employee1->searchEmployee($id);

        ?>
    </body>
        <br>
    <a href="indexEmployee.php">Go to the beginning page of Employees</a>
    <footer> You can contact us on the following email en number : <br>
        Phone Number, ########### or DonkeyTravelBookings@gmail.com</footer>
</html>


