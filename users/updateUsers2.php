<!doctype html>
<html>
<head>
</head>
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
    <br>
    <a href="userindex.html">Go to the beginning page of Users</a>
    </body>
<footer> You can contact us on the following email and number : <br>
    Phone Number, ########### or DonkeyTravelBookings@gmail.com</footer>
</html>


