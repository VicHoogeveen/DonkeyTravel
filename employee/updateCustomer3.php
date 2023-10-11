<!doctype html>
<html>
<head>
</head>
    <body>
        <?php
        require "Customer.php";

        // info from the array into the variables
        $id = $_POST["id"];
        $name = $_POST["name"];
        $password = $_POST["password"];
        $number = $_POST["number"];
        $email = $_POST["email"];
        // maken object ---------------------------------------------------


        $id1 = new Customer( $name, $password, $number, $email); // maakt object
        $id1->updateCustomer($id);                   // vervangt de tabelgegevens voor objectgegevens
        echo "This is the updated information: <br/>";
        echo $id . "<br/>";
        $id1->afdrukken();                           // prints

        ?>
    </body>
</html>
