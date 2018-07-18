<?php
header('Content-Type: text/html; charset=utf-8');
require_once('class-db.php');
if(!class_exists('DELETE')){
    class DELETE{
        public function post($postdata){
            global $db;
            
           
           $query= "DELETE FROM posts where post_ID ='$postdata[post_ID]'"; 
           
           return $db->delete($query);
        }
    }
}
$delete =new DELETE;

?>
