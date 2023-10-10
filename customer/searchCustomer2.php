<!doctype html>
<html>
    <head>
    </head>
    <body>
        <?php
        require "Customer.php";

        $id = $_POST["id"];
        $customer1 = new Customer();
        $customer1->searchCustomer($id);
        ?>
    </body>
</html>


