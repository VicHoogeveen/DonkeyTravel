<!doctype html>
<html>
<head>
</head>
    <body>
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
            <input type="submit"><br/><br/>
        </form>
    </body>
</html>
