<!doctype html>
<html>
    <body>
        <?php
        require "Customer.php";

        // reading fields of createCustomer -----
        $name = $_POST["nameField"];
        $password = $_POST["passwordField"];
        $number = $_POST["numberField"];
        $email = $_POST["emailField"];

        // makes object -------------------------------
        $customer = new Customer( $name, $password, $number, $email);
        $customer->createCustomer();

        // print object ---------------------------

        $customer->afdrukken();
        ?>
    </body>
</html>