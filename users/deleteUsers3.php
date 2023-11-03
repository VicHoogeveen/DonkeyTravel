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
        $delete = $_POST["deleteBox"];

        if ($delete == "yes") {
            echo "The User has been removed <br/>";
            $user1 = new users();
            $user1->deleteUser($id);
        } else {
            echo "The User hasn't been removed. <br/>";
        }
        ?>
    <br>
    <a href="userindex.html">Go to the beginning page of Users</a>
    </body>
<footer> You can contact us on the following email and number : <br>
    Phone Number, ########### or DonkeyTravelBookings@gmail.com</footer>
</html>
