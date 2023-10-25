<!doctype html>
<html>
<head>
</head>
    <body>
        <?php

        require "employee.php";                    // needed to make an object
        $id = $_POST["id"];
        $id1 = new employee();                // makes the object
        $id1->searchEmployee($id);


        // properties in variabelen zetten
        $name = $id1->get_name();
        $password = $id1->get_password();
        $number = $id1->get_number();
        $email = $id1->get_email();
        ?>


        <form action="updateEmployee3.php" method="POST">
            <!-- $id cant be changed -->
            <input type="hidden" name="id" value="<?php echo $id; ?> "><br/>
            <input type="text" name="name" value="<?php echo $name; ?> "><br/>
            <input type="text" name="password" value="<?php echo $password; ?> "><br/>
            <input type="text" name="number" value="<?php echo $number; ?> "><br/>
            <input type="text" name="email" value="<?php echo $email; ?> "><br/>
            <input type="submit"><br/><br/>
        </form>
    </body>
</html>

