<!doctype html>
<html>
<head>
</head>
    <body>
    <link rel="stylesheet" href="../DonkeyTravels.css">
        <?php

        require "users.php";                    // needed to make an object
        $id = $_POST["id"];
        $id1 = new users();                // makes the object
        $id1->searchUser($id);


        // properties in variabelen zetten
        $name = $id1->get_name();
        $password = $id1->get_password();
        ?>


    <form action="updateUsers3.php" method="POST">
        <!-- $id cant be changed -->
        <input type="hidden" name="id" value="<?php echo $id; ?> "><br/>
        <input type="text" name="name" value="<?php echo $name; ?> "><br/>
        <input type="text" name="password" value="<?php echo $password; ?> "><br/>
        <input type="submit"><br/><br/>
    </form>
    </body>
</html>


