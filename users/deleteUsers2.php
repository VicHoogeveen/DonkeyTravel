][<!doctype html>
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
