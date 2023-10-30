<!doctype html>
<html>
<head>
</head>
    <body>
    <link rel="stylesheet" href="../DonkeyTravels.css">
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
    </body>
</html>
