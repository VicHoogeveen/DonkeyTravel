<!doctype html>
<html>
        <body>
        <link rel="stylesheet" href="../DonkeyTravels.css">

        <div class="topnav" id="myTopNav">
            <nav>
                <ul>
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="../users">Users</a></li>
                </ul>
            </nav>
        </div>
        <br>
            <?php
            require "employee.php";

            // reading fields of createEmployee -----
            $name = $_POST["nameField"];
            $password = $_POST["passwordField"];
            $number = $_POST["numberField"];
            $email = $_POST["emailField"];

            $gehashed = password_hash($password, null);
            $passwordHash =$gehashed;

            // makes object -------------------------------
            $employee = new employee( $name, $passwordHash, $number, $email);
            $employee->createEmployee($name, $passwordHash,$number,$email);

            // print object ---------------------------

            echo "<br/>";
            echo ($name);
            echo "<br/>";
            echo ($number);
            echo "<br/>";
            echo ($email);
            ?>

        <br>
        <a href="indexEmployee.php">Go to the beginning page of Employees</a>
        </body>

</html>