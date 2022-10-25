<?
session_start ();
  include "lib.php";
//phpinfo();
?>
 
<!DOCTYPE html >
<html lang="ko">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>마론스</title>
  
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel=Stylesheet HREF=style.css type=text/css>
</head>
<body>

 
  <?
   
 $idk = mysqli_real_escape_string($conn,$_POST["idk"]); 
	  $goods = mysqli_real_escape_string($conn,  $_POST["goods"]); 
	  $price = mysqli_real_escape_string($conn, $_POST["price"]);
	  $password = mysqli_real_escape_string($conn,$_POST["password"]); 
      $url = mysqli_real_escape_string($conn,$_POST["url"]); 
      $old_name = mysqli_real_escape_string($conn,$_POST["old_name"]);
      $tuimg = mysqli_real_escape_string($conn,$_FILES["tuimg"]['name']);
      
      $memo = mysqli_real_escape_string($conn,$_POST["memo"]);
      
      $idk= stripslashes($idk);
      
      print_r($tuimg);
      print_r($old_name);
       




$target="./shop/data/".$_FILES['tuimg']['name'];

$tuimg= $_FILES['tuimg']['name'];
   if($old_name) { // 파일 필드에 값이 있다면 삭제..
      unlink("./shop/data/$old_name");
      move_uploaded_file($_FILES['tuimg']['tmp_name'],$target);
      $tmp = " tuimg='$tuimg_name', ";


} 
 
 $tuimg= $_FILES['tuimg']['name'];  
 //**********        
 $sql = "UPDATE `song` SET 
 `goods` = '$goods',
  
 `tuimg`='$tuimg',
  
  `price` = '$price',
  `url` = '$url',
  `memo` = '$memo'
  
   WHERE `song`.`idk` = '$idk' ";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
                               } else {
                               
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


mysqli_close($conn);
?>

<table>
<div class="footer">
 <p>
     <a href = write.php> [상품등록]</a>
  </p>
</div>  
<div class="footer">
 <p>
     <a href = list.php> [리스트목록]</a>
  </p>
</div>  
</table>
 </body>
 </html>