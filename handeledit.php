<?php 

require('inc/connection.php');
$title =$_POST['title'];
$body =$_POST['body'];
$image = $_FILES['image']['name'];
$path =$_FILES['image'] ['tmp_name'];
$query =mysqli_query($con, " UPDATE posts Set title ='$title ' ,'body' = '$body' , 'image = $image ' WHERE id = $id =");
move_uploaded_file($path ,"assrets/images/$name");
header( "location: index.php");
if($query==true){

    move_uploaded_file($path ,"assrets/images/$name");
header( "location: index.php");
    
}