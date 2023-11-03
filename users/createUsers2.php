<!doctype html>
<html>
        <body>
        <link rel="stylesheet" href="../DonkeyTravels.css">
        <div class="topnav" id="myTopNav">
            <nav>
                <ul>
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="../employee/indexEmployee.php">Employees</a></li>
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
        <br>
        <a href="userindex.html">Go to the beginning page of Users</a>
        </body>
        <footer> You can contact us on the following email and number : <br>
            Phone Number, ########### or DonkeyTravelBookings@gmail.com</footer>
</html>
