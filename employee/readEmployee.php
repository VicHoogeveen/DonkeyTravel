<!DOCTYPE html>
<html lang="en">
    <body>
    <link rel="stylesheet" href="../DonkeyTravels.css">
        <h1>Reading All The Employees</h1>
        <?php
        require "employee.php";
        $employee = new employee();
        $employee->readEmployee();

        ?>
    </body>
</html>
