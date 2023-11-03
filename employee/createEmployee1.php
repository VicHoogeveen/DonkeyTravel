<!doctype html>
<html>
<head>
</head>
    <body>
    <link rel="stylesheet" href="../DonkeyTravels.css">
    <div class="topnav" id="myTopNav">
        <nav>
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="../users/userindex.html">Users</a></li>
            </ul>
        </nav>
    </div>
    <br>
    <h1>Create an Employee's page</h1>
    <br>
        <form action="createEmployee2.php" method="POST">
            <label for "nameField">name: </label>
            <input type="text" name="nameField"></input>
            <br/>
            <label for "passwordField">password: </label>
            <input type="text" name="passwordField"></input>
            <br/>
            <label for "numberField">number: </label>
            <input type="text" name="numberField"></input>
            <br/>
            <label for "emailField">email: </label>
            <input type="text" name="emailField"></input>
            <input type="submit">
        </form>
    <br>
    <a href="indexEmployee.php">Go to the beginning page of Employees</a>
    </body>
<footer> You can contact us on the following email and number : <br>
    Phone Number, ########### or DonkeyTravelBookings@gmail.com</footer>
</html>
