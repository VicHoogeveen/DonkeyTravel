<!DOCTYPE html>
<html lang="en">
    <body>
        <h1>Reading All The Customers</h1>
        <?php
        require "Customer.php";
        $customer = new Customer();
        $customer->readCustomer();
        ?>
    </body>
</html>
