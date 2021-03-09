<?php 

class Connection {

    private $server;
    private $user;
    private $password;
    private $database;

    public $db;

    public function __construct($server,$user,$password,$database){

        $this->server = $server;
        $this->user = $user;
        $this->password = $password;
        $this->database = $database;

        $conn = new PDO("mysql:host=$server;dbname=$database", $user, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     
        $this->db = $conn;

    }


    public function query($sql){
        $this->db->exec($sql);
        //echo "sql = ".$sql. "Has been executed";
    }

    public function getRows($sql){
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
      
        // set the resulting array to associative
        $stmt->setFetchMode(PDO::FETCH_ASSOC);

        $result = $stmt->fetchAll();
        
        return $result;

    }

    public function getRow($sql){
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
      
        // set the resulting array to associative
        $stmt->setFetchMode(PDO::FETCH_ASSOC);

        $result = $stmt->fetch();
        
        return $result;
    }


}

$connection = new Connection('localhost','root','','mlm');


$connection2 = new Connection('localhost','root','','mlm');


// $sql = 'Select * from users ';

// $data = $connection->getRow($sql);

// echo "<pre>";
// print_r($data);
// exit;


?>