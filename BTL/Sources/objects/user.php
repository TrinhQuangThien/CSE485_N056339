<?php
// 'user' object
class User{
 
    // database connection and table name
    private $conn;
    private $table_name = "users";
 
    // object properties
    public $id;
    public $name;
    public $email;
    public $username;


    public $password;
   
 
    // constructor
    public function __construct($db){
        $this->conn = $db;
    }
    // check if given email exist in the database
    function usernameExists(){
    $this->username = $_POST['username'];
    $this->password = md5($_POST['password']);
    // query to check if email exists
    $query = "SELECT *
            FROM users
            WHERE username='$this->username' and password='$this->password'";
 
    // prepare the query
    $stmt = $this->conn->prepare( $query );
 
    // sanitize
    $this->username=htmlspecialchars(strip_tags($this->username));
 
    // bind given email value
   
 
    // execute the query
    $stmt->execute();
 
    // get number of rows
    $num = $stmt->rowCount();   
 
    // if email exists, assign values to object properties for easy access and use for php sessions
    if($num>0){
 
        // get record details / values
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
 
        // assign values to object properties
        $this->id = $row['id'];
        $this->name = $row['name'];
        $this->username = $row['username'];
       
     
        $this->password = $row['password'];
       
        // return true because email exists in the database
        return true;
    }
 
    // return false if email does not exist in the database
    return false;
}
    
}
?>