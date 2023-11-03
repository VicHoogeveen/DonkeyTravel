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

        require "users.php";                    // needed to make an object
        $id = $_POST["id"];
        $id1 = new users();                // makes the object
        $id1->searchUser($id);


        // properties in variabelen zetten
        $name = $id1->get_name();
        $password = $id1->get_password();
        ?>


    <form action="updateUsers3.php" method="POST">
        <!-- $id cant be changed -->
        <input type="hidden" name="id" value="<?php echo $id; ?> "><br/>
        <input type="text" name="name" value="<?php echo $name; ?> "><br/>
        <input type="text" name="password" value="<?php echo $password; ?> "><br/>
        <input type="submit"><br/><br/>
    </form>
    </body>
</html>


