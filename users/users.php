<?php
require_once "databaseConn.php";

class users
{

    public $name;
    public $password;


    function __construct($name = NULL, $password = NULL)
    {
        $this->name = $name;
        $this->password = $password;

    }

    // setters
    function set_name($name)
    {
        $this->name = $name;
    }

    function set_password($password)
    {
        $this->password = $password;
    }


    // getters
    function get_name()
    {
        return $this->name;
    }

    function get_password()
    {
        return $this->password;
    }


    // de resultaten afdrukken

    public function afdrukken()
    {
        echo $this->get_name();
        echo "<br>";
        echo $this->get_password();
        echo "<br>";
    }

    // hier maken we de "createCustomer" / dit gebruiken wij om de customers aan te maken

    public function createUser($name, $password)
    {
        global $conn;
        $id = NULL;
        $name = $this->get_name();
        $password = $this->get_password();
        try {
            $sql = $conn->prepare("INSERT INTO users (name, password) VALUES (:name, :password)");
            $sql->bindParam(":name", $name);
            $sql->bindParam(":password", $password);
            $sql->execute();
            echo "This user has been added:";

        } catch (PDOException $error) {
            echo $error->getMessage();
        }


    }

    public function readUser()
    {
        global $conn;

        $sql = $conn->Prepare(" SELECT * FROM users");
        $sql->execute();
        foreach ($sql as $user) {
            echo $user["id"] . " - ";
            $this->set_name($user["name"]);
            echo $user["name"] . " - ";
            echo "<br>";
        }
    }

    public function searchUser($id)
    {
        global $conn;

        $sql = $conn->Prepare("SELECT * FROM users 
                               WHERE id = :id");
        $sql->bindParam(":id", $id);
        $sql->execute();

        foreach ($sql as $user) {
            echo $user["id"];
            echo "<br/>";
            echo $this->name = $user["name"];
            echo "<br/>";
            echo $this->password = $user["password"];
        }
    }

    public function deleteUser($id)
    {
        global $conn;

        $sql = $conn->prepare("DELETE FROM users 
          WHERE id = :id");

        $sql->bindParam(":id", $id);
        $sql->execute();
    }

    public function updateUser($id)
    {
        global $conn;

        $id;
        $name = $this->get_name();
        $password = $this->get_password();


        $sql = $conn->prepare("UPDATE users 
                               SET  name =:name, password = :password 
                               WHERE id = :id");

        $sql->bindParam(":id", $id);
        $sql->bindParam(":name", $name);
        $sql->bindParam(":password", $password);
        $sql->execute();
    }
}
