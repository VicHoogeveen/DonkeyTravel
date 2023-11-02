<?php
require_once "users/users.php";

// class for the user

// database configuration
$dbuser = "root";
$dbpass = "";
$dbhost = "localhost";
$dbname = "donkey_travel";

// class for the user
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

<form method="POST" action="users/userindex.html">
    <input type="text" name="username" placeholder="username" required><br>
    <input type="password" name="password" placeholder="password" required><br>
    <input type="submit" value="login">
</form>
<H2><a href="users/createUsers1.php">aanmelden</a></H2>
</div>