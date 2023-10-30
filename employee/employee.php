<?php
 require_once "../databaseConn.php";

class employee
{

    public $name;
    public $password;
    public $number;
    public $email;

    function __construct($name = NULL, $password = NULL, $number = NULL, $email = NULL){
        $this->name = $name;
        $this->password = $password;
        $this->number = $number;
        $this->email = $email;
    }

    // setters
    function set_name($name){
        $this->name = $name;
    }

    function set_password($password){
        $this->password = $password;
    }

    function set_number($number){
        $this->number = $number;
    }

    function set_email($email){
        $this->email = $email;
    }

    // getters
    function get_name(){
        return $this->name;
    }

    function get_password(){
        return $this->password;
    }

    function get_number(){
        return $this->number;
    }

    function get_email(){
        return $this->email;
    }

    // de resultaten afdrukken

    public function afdrukken(){
        echo $this->get_name();
        echo "<br>";
        echo $this->get_password();
        echo "<br>";
        echo $this->get_number();
        echo "<br>";
        echo $this->get_email();
        echo "<br>";
    }

    // hier maken we de "createCustomer" / dit gebruiken wij om de customers aan te maken

    public function createEmployee($name, $password, $number, $email){
        global $conn;
        $id = NULL;
        $name = $this->get_name();
       $password = $this->get_password();
       $number = $this->get_number();
       $email = $this->get_email();
        try {
            $sql = $conn->prepare("INSERT INTO employee (name, password, number, email) VALUES (:name, :password, :number, :email)");
            $sql->bindParam(":name", $name);
            $sql->bindParam(":password", $password);
            $sql->bindParam(":number", $number);
            $sql->bindParam(":email", $email);
            $sql->execute();
            echo "The employee has been added:";

        }catch(PDOException $error){
            echo $error->getMessage();
        }


    }

    public function readEmployee(){
        global $conn;

        $sql = $conn->Prepare(" SELECT * FROM employee");
        $sql->execute();
        foreach($sql as $employee){
            echo $employee["id"] . " - ";
            $this->set_name($employee["name"]);
            echo $employee["name"] . " - ";
            $this->set_number($employee["number"]);
            echo $employee["number"] . " - ";
            $this->set_email($employee["email"]);
            echo $employee["email"] ;
            echo "<br>";
        }
    }

    public function searchEmployee($id){
        global $conn;

        $sql = $conn->Prepare("SELECT * FROM employee 
                               WHERE id = :id");
        $sql->bindParam(":id", $id);
        $sql->execute();

        foreach ($sql as $employee){
            echo $employee["id"];
            echo "<br/>";
            echo $this->name = $employee["name"];
            echo "<br/>";
            echo $this->password = $employee["password"];
            echo "<br/>";
            echo $this->number = $employee["number"];
            echo "<br/>";
            echo $this->email = $employee["email"];
        }
    }

        public function deleteEmployee($id){
         global $conn;

         $sql = $conn->prepare("DELETE FROM employee 
          WHERE id = :id");

         $sql->bindParam(":id", $id);
         $sql->execute();
    }

    public function updateEmployee($id){
        global $conn;

        $id;
        $name = $this->get_name();
        $password = $this->get_password();
        $number = $this->get_number();
        $email = $this->get_email();

        $sql = $conn->prepare("UPDATE employee 
                               SET  name =:name, password = :password, number = :number, email = :email 
                               WHERE id = :id");

        $sql->bindParam(":id", $id);
        $sql->bindParam(":name", $name);
        $sql->bindParam(":password", $password);
        $sql->bindParam(":number", $number);
        $sql->bindParam(":email", $email);
        $sql->execute();
    }
}