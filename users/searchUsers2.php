<!doctype html>
<html>
<head>
</head>
    <body>
    <link rel="stylesheet" href="../DonkeyTravels.css">
        <?php
        require "users.php";

        $id = $_POST["id"];
        $user1 = new users();
        $user1->searchUser($id);

        ?>
    </body>
</html>
