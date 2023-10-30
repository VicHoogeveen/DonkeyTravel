<!doctype html>
<html>
    <body>
    <link rel="stylesheet" href="../DonkeyTravels.css">
        <?php
        require "employee.php";

        // reading fields of createCustomer -----
        $name = $_POST["nameField"];
        $password = $_POST["passwordField"];
        $number = $_POST["numberField"];
        $email = $_POST["emailField"];

        $gehashed = password_hash($password, null);
        $passwordHash =$gehashed;

        // makes object -------------------------------
        $employee = new employee( $name, $passwordHash, $number, $email);
        $employee->createEmployee($name, $passwordHash,$number,$email);

        // print object ---------------------------

        echo "<br/>";
        echo ($name);
        echo "<br/>";
        echo ($number);
        echo "<br/>";
        echo ($email);
        ?>
    </body>
</html>