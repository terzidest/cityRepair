<?php
header('Content-Type: text/html; charset=utf-8');
require_once('class-db.php');
if(!class_exists('INSERT')){
    class INSERT{
        public function post($postdata){
            global $db;
            
           
           $query= "INSERT INTO posts(post_title,post_content,post_category,post_image,post_date,post_lat,post_lng)  VALUES('$postdata[post_title]','$postdata[post_content]','$postdata[post_category]','$postdata[post_image]','$postdata[post_date]','$postdata[post_lat]','$postdata[post_lng]')";  
           
           return $db->insert($query);
        }
    }
}
$insert =new INSERT;

?>

