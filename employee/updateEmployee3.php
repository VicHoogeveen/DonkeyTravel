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
        require "employee.php";

        // info from the array into the variables
        $id = $_POST["id"];
        $name = $_POST["name"];
        $password = $_POST["password"];
        $number = $_POST["number"];
        $email = $_POST["email"];
        // maken object ---------------------------------------------------

        $gehashed = password_hash($password, null);
        $passwordHash = $gehashed;

        $id1 = new employee( $name, $passwordHash, $number, $email); // maakt object
        $id1->updateEmployee($id);                   // vervangt de tabelgegevens voor objectgegevens
        echo "This is the updated information: <br/>";
        echo $id . "<br/>";
        $id1->afdrukken();                           // prints

        ?>
    </body>
<br>
    <a href="indexEmployee.php">Go to the beginning page of Employees</a>
</html>
