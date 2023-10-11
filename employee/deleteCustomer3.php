<!doctype html>
<html>
<head>
</head>
    <body>
        <?php
        require "Customer.php";

        $id = $_POST["id"];
        $delete = $_POST["deleteBox"];

        if ($delete == "yes") {
            echo "The Customer is removed <br/>";
            $customer1 = new Customer();
            $customer1->deleteCustomer($id);
        } else {
            echo "The employee hasn't been removed. <br/>";
        }
        ?>
    </body>
</html>
