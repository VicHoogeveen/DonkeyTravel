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
        require "users.php";

        $id = $_POST["id"];
        $user1 = new users();
        $user1->searchUser($id);

        ?>
    <br>
    <a href="userindex.html">Go to the beginning page of Users</a>
    </body>
<footer> You can contact us on the following email and number : <br>
    Phone Number, ########### or DonkeyTravelBookings@gmail.com</footer>
</html>
