<?php  
session_start();  

 include"lib.php";
 
      $no = mysqli_real_escape_string($conn,$_post["no"]); 
	    $username = mysqli_real_escape_string($conn,  $_POST["username"]); 
	    $price = mysqli_real_escape_string($conn, $_POST["price"]);
	    $password = mysqli_real_escape_string($conn,$_POST["password"]); 
      $url = mysqli_real_escape_string($conn,$_POST["url"]); 
      $file = mysqli_real_escape_string($conn,$_POST["file"]);
      $tuimg = mysqli_real_escape_string($conn,$_POST["tuimg"]);
      $id = mysqli_real_escape_string($conn,$_POST["id"]); 
      $memo = mysqli_real_escape_string($conn,$_POST["memo"]);
      $subject = mysqli_real_escape_string($conn,$_POST["subject"]); 
   
    $username = $_POST['username'];
    $password = $_POST['password'];

     
   
$sql = "select * from member where username='$username'";



$result = mysqli_query($conn,$sql);

// Numeric array
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
print_r($row);
 if($row['password']==$password){
    $_SESSION['username']=$username;
    if(isset($_SESSION['username'])){
   
        header('location:./home.php');
            $_SESSION['password']=$password;                         } 
      }else{
            echo"세션저장실패";
     
            echo"wrong username or pw";
     
           echo"wrong username or pw";
    }

?>
 