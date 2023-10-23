<!DOCTYPE html>
<html lang="en">
    <body>
        <h1>Reading All The Employees</h1>
        <?php
        require "employee.php";
        $employee = new employee();
        $employee->readEmployee();
        ?>
    </body>
</html>
