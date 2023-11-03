<!DOCTYPE html>
<html lang="en">
    <body>
    <link rel="stylesheet" href="../DonkeyTravels.css">
    <div class="topnav" id="myTopNav">
        <nav>
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="../users/userindex.html">Users</a></li>
            </ul>
        </nav>
    </div>
    <br>
        <h1>Reading All The Employees</h1>
        <?php
        require "employee.php";
        $employee = new employee();
        $employee->readEmployee();

        ?>
    <br>
     <a href="indexEmployee.php">Go to the beginning page of Employees</a>
    </body>
    <footer> You can contact us on the following email and number : <br>
        Phone Number, ########### or DonkeyTravelBookings@gmail.com</footer>
</html>
