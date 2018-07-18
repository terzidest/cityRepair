<?php
header('Content-Type: text/html; charset=utf-8');
if(!class_exists('DB')){
    class DB{
        public function __construct(){
            $mysqli= new mysqli('localhost','root','','cms');
            
            if($mysqli->connect_errno){
                printf("Connect failed %s\n",$mysqli->connect_error);
                exit();
            }
            $mysqli->set_charset ("utf8");    
             
            $this->connection= $mysqli;
            
       
}
public function insert($query){
    
    
   
            
    
   $result= $this->connection->query($query);
    
    return $result;
            
          
}
public function delete($query){
    
    
   
            
    
   $result= $this->connection->query($query);
    
    return $result;
            
          
}
public function select($query){
   
    $result= $this->connection->query($query);
   
    while($obj = $result->fetch_object()){
        $results[] = $obj;
    }
    return $results;
}
}
}


$db = new DB;
?>

