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
    <h1>Create a User's page</h1>
        <form action="createUsers2.php" method="POST">
            <label for "nameField">name: </label>
            <input type="text" name="nameField"></input>
            <br/>
            <label for "passwordField">password: </label>
            <input type="text" name="passwordField"></input>
            <input type="submit">
        </form>
    </body>
</html>

