<?

  include "lib.php";
  
  
  ?>
<!DOCTYPE html>
<html lang="ko">
<head>
  <title>마론스상품리스트</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

<link rel=Stylesheet HREF=style.css type=text/css>
<link rel=Stylesheet HREF=style.css type=text/css>
<div id=ipipipip1>Loading...</div>
<script src=http://www.ipipipip.net/data/ipipipip1.js>

</script>
<style>


div.gallery img {
  width: 250;
  height:200;
}

div.desc {
  padding: 15px;
  text-align: center;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 0 6px;
  float: left;
  width: 24.99999%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 150;
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}

.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: white;
   color: black;
   text-align: center;
div.gallery {
  border: 1px solid #ccc;
}

div.gallery:hover {
  border: 1px solid #777;
}
</style>
 <body>
 <table>
 
 <?
 
 $sql= "SELECT * FROM `song` ";
 
$result = mysqli_query($conn, $sql);

while ($data = mysqli_fetch_array($result)){


 ?>

 <tr>
 <div class="responsive">
  <div class="gallery">
    
      <img src=../shop/data/<?=$data['tuimg']?>  width="250" height="200">
    </div>
    <div class="desc"><a  href=view.php?idk="<?=$data['idk']?>"><?=$data['coment']?></div>
    <div class="desc">￦<?=number_format($data['price'])?></div>
    <div class="desc"><?=$data['memo']?></div>
   <div class="desc"><a target="_blank" href="<?=$data['url']?>"><?=$data['url']?></a></div>
   <?
   session_start();
   $_SESSION['user']=$username;
   $_SESSION['idk']=$idk;
   ?>
    <div class="desc"><a  href=edit.php?idk="<?=$data['idk']?>" >수정</a></div>
  </div>
</div>

  <?
  }

  ?>

</table>

<table>

<div class="footer">
 <p>
     <a href = write.php> [상품등록]</a>
  </p>
</div>  
</table>

 </body>
  </html>