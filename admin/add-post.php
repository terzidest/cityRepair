<?php 
header('Content-Type: text/html; charset=utf-8');
if(!empty($_POST)){
    

require_once('../includes/class-insert.php');



}
require_once('../includes/class-delete.php');
require_once('../includes/class-query.php');
$posts_array = $query->all_posts();
?>
<?php

if(isset($_POST['upload'])) {

    //In your upload script you could store all the upload data in $_SESSION
    include('upload.php');

}

if(isset($_POST['submit'])) {

    if($insert->post($_POST)){
        header("Refresh:5");
    echo'<p>Data inserted successfully!</p>';
    
}
    //Trim and escape post data here
    //Send the post data and file upload data via your own submit function/script or whatever

}
if(isset($_POST['delete'])) {

    if($delete->post($_POST)){
        header("Refresh:5");
    echo'<p>Data deleted successfully!</p>';
    
}
    //Trim and escape post data here
    //Send the post data and file upload data via your own submit function/script or whatever

}


?>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
        <title>Insert Post</title>
    </head>
    <body>
        <p><b> CMS- City of Athens</b>
        <p><b> Enter the data of Posts:</b>
            <a href = "logout.php" tite = "Logout">Logout.</a>
       <form method="post" enctype="multipart/form-data">
           <p> <label><b> Select image to upload:</b></label>   
    
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="upload"></p>
           
           <p>
            <label><b> Title</b></label>
            <input type="text" name="post_title"/>
        </p>
        <p>
            <label><b> Content</b></label>
            <textarea name="post_content"></textarea>
        </p>
        
        <p>
            <label><b> Categories</b></label>
            <select name="post_category">
                <option value="Προσβασης">Πρόσβασης</option>
                <option value="Οδικα">Οδικά</option>
                <option value="Φωτισμου">Φωτισμού</option>
                <option value="Πλημμυρες">Πλημμύρες</option>
                
            </select>
        </p>
        
         <p>
            <label><b> latitude</b></label>
            <input type="text" name="post_lat"/>
        </p>
        
        <p>
            <label><b> longitude</b></label>
              <input type="text" name="post_lng"/>
        </p>
        
        
     <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script> <!-- για να εμφανίζεται το ημερολογιο στον firefox -->
     <script src="//cdn.jsdelivr.net/webshim/1.14.5/polyfiller.js"></script>
 <script>
webshims.setOptions('forms-ext', {types: 'date'});
webshims.polyfill('forms forms-ext');
$.webshims.formcfg = {
en: {
    dFormat: '-',
    dateSigns: '-',
    patterns: {
        d: "yy-mm-dd"
    }
}
};
 </script>
        <p>
        <label><b> date</b></label>
         <input type="date" name="post_date">
        </p>
      
        <p><input type="hidden" name="post_image" value="<?php echo $image;?>"</p>
     

        
    <p>
        <input type="submit" name="submit" value="Submit"/>
    </p>
    
  
        
        
        <br><br>
        
      
         
             
                 <?php foreach($posts_array as $post):?>
                
        
                              <table>
                                <tr>
                                    <th>Post ID</th>
                                    <th>Post Title</th>
                                    <th>Post Category</th>
                                    <th>Post Date</th>
                                    <th>Post image</th>
                                    
                                </tr>
                                <tr>
                                    <td><?php echo $post->post_ID;?></td>
                                    <td><?php echo $post->post_title; ?></td> 
                                    <td><?php echo $post->post_category; ?></td> 
                                    <td><?php echo $post->post_date; ?></td>
                                    <td><?php echo $post->post_image; ?></td>
                                    
                                    
                                </tr>
                              </table>
                              <input type="hidden" name="post_ID" value="<?php echo $post->post_ID;?>"/>  
                              <p>
                                <input type="submit" name="delete" value="delete post"/>
                              </p>
        
                                <br><br>  
                
             <?php endforeach; ?>
           
              </form>                      
        
    </body>
</html>





