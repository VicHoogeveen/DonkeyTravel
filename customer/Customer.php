<?php
 require_once "../databaseConn.php";

class Customer
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

    public function createCustomer(){
        global $conn;

        $id = NULL;
        $name = $this->get_name();
        $password = $this->get_password();
        $number = $this->get_number();
        $email = $this->get_email();

        $sql = $conn->Prepare("INSERT INTO customers
VALUES (:id, :name, :password, :number, :email)");

        $sql->bindParam(":id", $id);
        $sql->bindParam(":name", $name);
        $sql->bindParam(":password", $password);
        $sql->bindParam(":number", $number);
        $sql->bindParam(":email", $email);
        $sql->execute();

        echo "The customer has been added :";
    }

    public function readCustomer(){
        global $conn;

        $sql = $conn->Prepare(" SELECT * FROM customers");
        $sql->excecute();
        foreach($sql as $customer){
            echo $customer["id"] . " - ";
            $this->set_name($customer["name"]);
            echo $customer["name"] . " - ";
            $this->set_password($customer["password"]);
            echo $customer["password"] . " - ";
            $this->set_number($customer["number"]);
            echo $customer["number"] . " - ";
            $this->set_email($customer["email"]);
            echo $customer["email"] . " - ";
        }
    }

    public function searchCustomer($id){
        global $conn;

        $sql = $conn->Prepare("SELECT * FROM customers 
               WHERE id = :id");

        $sql->bindParam(":id", $id);
        $sql->excecute();

        foreach ($sql as $customer){
            echo $customer["id"] . "<br>";
            echo $this->name = $customer["name"] . "<br>";
            echo $this->password = $customer["password"] . "<br>";
            echo $this->number = $customer["number"] . "<br>";
            echo $this->email = $customer["email"] . "<br>";
        }
    }

        public function deleteCustomer($id){
         global $conn;

         $sql = $conn->prepare("DELETE FROM customers 
          WHERE id = :id");

         $sql->bindParam(":id", $id);
         $sql->excecute();
    }

    public function updateCustomer($id){
        global $conn;

        $id;
        $name = $this->get_name();
        $password = $this->get_password();
        $number = $this->get_password();
        $email = $this->get_email();

        $sql = $conn->prepare("   UPDATE customers
                      SET name = :name, password = :password, number = :number, email = :email
                      WHERE id = :id");

        $sql->bindParam(":id", $id);
        $sql->bindParam(":name", $name);
        $sql->bindParam(":password", $password);
        $sql->bindParam(":number", $number);
        $sql->bindParam(":email", $email);
        $sql->excexute();
    }
}