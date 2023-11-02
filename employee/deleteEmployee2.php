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
                <li><a href="../users">Users</a></li>
            </ul>
        </nav>
    </div>
    <br>
        <?php
        require "employee.php";

        $id = $_POST["id"];
        $employee1 = new employee();
        $employee1->searchEmployee($id);
        ?>

        <form action="deleteEmployee3.php" method="POST">
            <!-- $id cant be changed -->
            <input type="hidden" name="id" value=" <?php echo $id ?> ">
            <!-- 2x deleteBox-->
            <input type="hidden" name="deleteBox" value="no">
            <input type="checkbox" name="deleteBox" value="yes">
            <label for="deleteBox"> Remove the Employee.</label><br/><br/>
            <input type="submit"><br/>
        </form>
    <br>
        <a href="indexEmployee.php">Go to the beginning page of Employees</a>
    </body>
<footer> You can contact us on the following email en number : <br>
    Phone Number, ########### or DonkeyTravelBookings@gmail.com</footer>
</html>
