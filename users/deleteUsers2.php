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
        $user1 = new users();
        $user1->searchUser($id);
        ?>

    <form action="deleteUsers3.php" method="POST">
        <!-- $id cant be changed -->
        <input type="hidden" name="id" value=" <?php echo $id ?> ">
        <!-- 2x deleteBox-->
        <input type="hidden" name="deleteBox" value="no">
        <input type="checkbox" name="deleteBox" value="yes">
        <label for="deleteBox"> Remove the User.</label><br/><br/>
        <input type="submit"><br/><br/>
    </form>
    </body>
</html>
