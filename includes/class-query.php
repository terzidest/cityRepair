<?php
header('Content-Type: text/html; charset=utf-8');
require_once('class-db.php');


   if(!class_exists('QUERY')){
       class QUERY{
           public function all_posts(){
               global $db;
               $query= "SELECT*FROM posts";
               return $db->select($query);
           }
           
           public function post($postid){
               global $db;
                $query= "SELECT*FROM posts WHERE post_ID ='$postid'";
                
                return $db->select($query);
           }
       }
   }
   
   
   $query = new QUERY; 
?>