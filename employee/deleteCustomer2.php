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

        <form action="deleteCustomer3.php" method="POST">
            <!-- $id cant be changed -->
            <input type="hidden" name="id" value=" <?php echo $id ?> ">
            <!-- 2x deleteBox-->
            <input type="hidden" name="deleteBox" value="no">
            <input type="checkbox" name="deleteBox" value="yes">
            <label for="deleteBox"> Remove the Customer.</label><br/><br/>
            <input type="submit"><br/><br/>
        </form>
    </body>
</html>
