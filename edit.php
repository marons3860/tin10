<?
session_start();
  include "lib.php";
 $username = $_SESSION['username'];
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ko" lang="ko">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Type" content="text/html; charset=euckr" />
<meta http-equiv=content-type content=text/html; charset=euc-kr>

  <title>상품등록</title>

<meta name="viewport" content="width=device-width, initial-scale=1" />

<link rel="stylesheet" href="style.css" type="text/css" />

</script>

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
    $idk = $_GET['idk']; 
    $idk = mysqli_real_escape_string($conn, $idk); 
    $idk= stripslashes($idk);

 $_SESSION['idk']=$idk; 
    
$sql= " SELECT  * FROM `song`where idk=$idk ";
 
$result = mysqli_query($conn, $sql);

$data = mysqli_fetch_array($result);
?>



 
<div class="container">
 
  <form action="edit_post.php" method="post" enctype="multipart/form-data" >
   <input type=hidden name=idk value=<?=$idk?>>
  <input type=hidden name=old_name value="<?=$data['tuimg']?>";
 
    <div class="form-group">
      <label for="coment">상품명:</label>
      <input type="text" class="form-control" id="goods" value="<?=$data['goods']?>" name="goods" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
     <img src=../shop/data/<?=$data['tuimg']?>  width="250" height="200">
      <label for="tuimg">제품사진:</label>
      
     <input type="file" class="form-control" id="tuimg" placeholder="제품사진" name="tuimg" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="price">가격:</label>
      <input type="text" class="form-control" id="price"  value="￦<?=number_format($data['price'])?>"name="price" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="url">홈페이지주소:</label>
      <input type="text" class="form-control" id="url" value="<?=$data['url']?>" name="url" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
   <div class="form-group">
      <label for="memo">제품설명:</label>
      <input type="text" class="form-control" id="memo" value="<?=$data['memo']?>"  name="memo" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember" required> 정보수집에 동의합니다..
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Check this checkbox to continue.</div>
      </label>
    </div>
    <button type="submit" class="btn btn-primary">update</button>
  </form>
</div>

<script>
// Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>

</body>
</html>
