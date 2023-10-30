<!DOCTYPE html>
<html lang="en">
    <body>
    <link rel="stylesheet" href="../DonkeyTravels.css">
    <h1>Reading All The Users</h1>
        <?php
        require "users.php";
        $user = new users();
        $user->readUser();

        ?>
    </body>
</html>
