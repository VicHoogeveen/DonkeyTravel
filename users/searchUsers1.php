<!doctype html>
<html lang="">
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
    <h1>Search for an User</h1>
        <form action="searchUsers2.php" method="POST">
            <label for="id">ID:</label>
            <input type="text" id="id" name="id">
            <input type="submit">
            <br>
        </form>
    </body>
</html>
