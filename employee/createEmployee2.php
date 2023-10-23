<!doctype html>
<html>
    <body>
        <?php
        require "employee.php";

        // reading fields of createCustomer -----
        $name = $_POST["nameField"];
        $password = $_POST["passwordField"];
        $number = $_POST["numberField"];
        $email = $_POST["emailField"];

        // makes object -------------------------------
        $employee = new employee( $name, $password, $number, $email);
        $employee->createEmployee($name, $password,$number,$email);

        // print object ---------------------------

        $employee->afdrukken();
        ?>
    </body>
</html>