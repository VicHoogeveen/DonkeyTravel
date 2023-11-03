<!DOCTYPE html>
<html lang="en">
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
    <h1>Reading All The Users</h1>
        <?php
        require "users.php";
        $user = new users();
        $user->readUser();

        ?>
    <br>
    <a href="userindex.html">Go to the beginning page of Users</a>
    </body>
    <footer> You can contact us on the following email and number : <br>
        Phone Number, ########### or DonkeyTravelBookings@gmail.com</footer>
</html>
