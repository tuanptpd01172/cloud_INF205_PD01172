<?php

//    $dsn="mysql:host=localhost;dbname=ass_inf205_pd01172";
//    
//        $username="root";
//        $password="";
//        
//      $db = new PDO($dsn,$username,$password);
//      $db->exec('set name utf8');
    
      
class model{
    
    private $db;
    private $username;
    private $password;
    private $dsn;
    private $result = array();
    private $statement;
    private $rowcount;


    public function __construct() {
        $this->dsn ="mysql:host=localhost;dbname=ass_inf205_pd01172;charset=utf8"; 
        $this->username = "root";
        $this->password = "";
        $this->connect();
    }

    private function connect(){
        $this->db= new PDO($this->dsn, $this->username, $this->password);
//        $this->db->exec('set name utf8');
    }
    
    public function select($query){
        $this->statement = $this->db->prepare($query);
        $this->statement->execute();
        return $this->statement;
    }
    public function count_record(){
    $this->rowcount=  $this->statement->rowCount();
    return $this->rowcount;
    }
    public function fetchArray(){
        
        if(is_resource($this->statement) == FALSE){
            $prArray = array();
            while ($row = $this->statement->fetch(PDO::FETCH_ASSOC)){  
                $prArray[] = $row;
            }
        
        
        return $prArray;
        
        }
    }
    
    public function closedb(){
        $this->db=null;
    }
}

?>