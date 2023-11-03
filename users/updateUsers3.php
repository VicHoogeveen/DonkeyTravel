<!doctype html>
<html>
<head>
</head>
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
    </body>
</html>
