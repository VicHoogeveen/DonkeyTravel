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
                <li><a href="../users">Users</a></li>
            </ul>
        </nav>
    </div>
    <br>
        <?php

        require "employee.php";                    // needed to make an object
        $id = $_POST["id"];
        $id1 = new employee();                // makes the object
        $id1->searchEmployee($id);


        // properties in variabelen zetten
        $name = $id1->get_name();
        $number = $id1->get_number();
        $email = $id1->get_email();

        ?>


        <form action="updateEmployee3.php" method="POST">
            <!-- $id cant be changed -->
            <input type="hidden" name="id" value="<?php echo $id; ?> "><br/>
            <input type="text" name="name" value="<?php echo $name; ?> "><br/>
            <input type="text" name="password" value=""><br/>
            <input type="text" name="number" value="<?php echo $number; ?> "><br/>
            <input type="text" name="email" value="<?php echo $email; ?> "><br/>
            <input type="submit"><br/>
        </form>
    </body>
<br>
    <a href="indexEmployee.php">Go to the beginning page of Employees</a>
<footer> You can contact us on the following email en number : <br>
    Phone Number, ########### or DonkeyTravelBookings@gmail.com</footer>
</html>

