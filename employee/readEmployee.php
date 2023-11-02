<!DOCTYPE html>
<html lang="en">
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
        <h1>Reading All The Employees</h1>
        <?php
        require "employee.php";
        $employee = new employee();
        $employee->readEmployee();

        ?>
    <br>
     <a href="indexEmployee.php">Go to the beginning page of Employees</a>
    </body>
</html>
