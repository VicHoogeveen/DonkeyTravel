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
