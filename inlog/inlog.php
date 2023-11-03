<?php
// class for the user

$dbhost = "localhost";
$dbname = "donkey_travel";
$dbuser = "root";
$dbpass = "root";

class User
{
    private $dbconn;

    public function __construct($dbhost, $dbname, $dbuser, $dbpass)
    {
        // making a connection with the database
        $dsn = "mysql:host=$dbhost;dbname=$dbname;charset=utf8mb4";

        try {
            $this->dbconn = new PDO($dsn, $dbuser, $dbpass);
            $this->dbconn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Kan geen verbinding maken met de database: " . $e->getMessage());
        }
    }

    public function login($name, $password)
    {
        try {
            // preparing the quary
            $query = "SELECT * FROM users WHERE name = :name";
            $stmt = $this->dbconn->prepare($query);

            // Parameters bind
            $stmt->bindParam(':name', $name);

            // Query execute
            $stmt->execute();

            // verify users
            if ($stmt->rowCount() > 0) {
                $user = $stmt->fetch(PDO::FETCH_ASSOC);
                $storedPassword = $user['password'];

                // password verify
                if (password_verify($password, $storedPassword)) {
                    // login successful
                    return true;
                }
            }

            // login failed
            return false;
        } catch (PDOException $e) {
            die("Fout bij het uitvoeren van de query: " . $e->getMessage());
        }
    }
}

// login system
$user = new User($dbhost, $dbname, $dbuser, $dbpass);

// login attempt verify
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($user->login($username, $password)) {
        header("location: ../users/createUsers1.php");
    } else {
        echo "Failed to login!";
    }
}
?>
<head>
    <link rel="stylesheet" href="../stylesheet.css">
</head>
    <body>
    <div class="topnav" id="myTopNav">
        <nav>
            <ul>
                <li><a href="../index.php">HOME</a></li>
            </ul>
        </nav>
    </div>
    <br>
    <br>
    <div class="logodiv">

        <!-- Dit is de logo -->
        <img class="logodiv" src="../pictures/donkeytravel.png">
    </div>
    <div class="login">
            <form method="POST" action="../users/userindex.html">
                <input type="text" name="username" placeholder="Username" required><br>
                <input type="password" name="password" placeholder="Password" required><br>
                <input type="submit" value="Login">
            </form>
        <H2><a href="../users/createUsers1.php">Aanmelden</a></H2>
    </div>
    </body>
<footer>
    <p>You can contact us on the following email en number : <br>
   Phone Number, ########### or DonkeyTravelBookings@gmail.com </p>
</footer>
