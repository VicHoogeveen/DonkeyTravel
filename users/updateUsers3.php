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

        // info from the array into the variables
        $id = $_POST["id"];
        $name = $_POST["name"];
        $password = $_POST["password"];
        // maken object ---------------------------------------------------


        $id1 = new users( $name, $password); // maakt object
        $id1->updateUser($id);                   // vervangt de tabelgegevens voor objectgegevens
        echo "This is the updated information: <br/>";
        echo $id . "<br/>";
        $id1->afdrukken();                           // prints
        
        ?>
    <br>
    <a href="userindex.html">Go to the beginning page of Users</a>
    </body>
<footer> You can contact us on the following email and number : <br>
    Phone Number, ########### or DonkeyTravelBookings@gmail.com</footer>
</html>
