<!doctype html>
<html>
        <body>
        <link rel="stylesheet" href="../DonkeyTravels.css">
                <?php
                require "users.php";

                // reading fields of createCustomer -----
                $name = $_POST["nameField"];
                $password = $_POST["passwordField"];


                $gehashed = password_hash($password, null);
                $passwordHash =$gehashed;

                // makes object -------------------------------
                $user = new users( $name, $passwordHash);
                $user->createUser($name, $passwordHash);

                // print object ---------------------------

                echo "<br/>";
                echo ($name);
                ?>
        </body>
</html>
