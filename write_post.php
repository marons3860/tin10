<?
   include "lib.php";
  
 // echo$name=$_files['img']['name'];
 
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
 
 $idk = mysqli_real_escape_string($conn,$_post["idk"]); 
	  $goods = mysqli_real_escape_string($conn,  $_POST["goods"]); 
	  $price = mysqli_real_escape_string($conn, $_POST["price"]);
	  $password = mysqli_real_escape_string($conn,$_POST["password"]); 
      $url = mysqli_real_escape_string($conn,$_POST["url"]); 
      $file = mysqli_real_escape_string($conn,$_POST["file"]);
      $tuimg = mysqli_real_escape_string($conn,$_POST["tuimg"]);
      $id = mysqli_real_escape_string($conn,$_POST["id"]); 
      $memo = mysqli_real_escape_string($conn,$_POST["memo"]);
      $subject = mysqli_real_escape_string($conn,$_POST["subject"]); 

 $target="../shop/data/".$_FILES['tuimg']['name'];
move_uploaded_file($_FILES['tuimg']['tmp_name'],$target);

$tuimg= $_FILES['tuimg']['name'];
$sql = "INSERT INTO song (goods,tuimg,price,url,memo)
  VALUES ('$goods','$tuimg','$price','$url','$memo')";

//$sql .= "INSERT INTO song (idk,password, url, memo)
 //VALUES (null,'$password','$url','$memo');";
//$sql .= "INSERT INTO song (idk,img,file) VALUES (null,'$img_name','$file')";

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