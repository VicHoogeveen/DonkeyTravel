<!DOCTYPE html>
<html lang="en">
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
    <h1>Reading All The Users</h1>
        <?php
        require "users.php";
        $user = new users();
        $user->readUser();

        ?>
    </body>
</html>
