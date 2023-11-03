<!doctype html>
<html>
        <body>
        <link rel="stylesheet" href="../DonkeyTravels.css">
        <div class="topnav" id="myTopNav">
            <nav>
                <ul>
                    <li><a href="createUsers1.php">create</a></li>
                    <li><a href="readUsers.php">read</a></li>
                    <li><a href="updateUsers1.php">update</a></li>
                    <li><a href="deleteUsers1.php">delete</a></li>
                    <li><a href="searchUsers1.php">search</a></li>
                </ul>
            </nav>
        </div>
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
