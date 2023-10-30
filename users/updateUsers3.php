<!doctype html>
<html>
<head>
</head>
    <body>
    <link rel="stylesheet" href="../DonkeyTravels.css">
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
