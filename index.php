<?
session_start();
  include "lib.php";
 
?>
  
<!DOCTYPE html>
<html>
<title>무대 콜</title>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

* {
  box-sizing: border-box;
}

.row::after {
  content: "";
  clear: both;
  display: table;
}

[class*="col-"] {
  float: left;
  padding: 15px;
}

html {
  font-family: "Lucida Sans", sans-serif;
}

.header {
  background-color: #ee82ee;
  color: #ffffff;
  padding: 15px;
}

.menu ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

.menu li {
  padding: 8px;
  margin-bottom: 7px;
  background-color: #33b5e5;
  color: #ffffff;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

.menu li:hover {
  background-color: #0099cc;
}

.aside {
  background-color: #33b5e5;
  padding: 15px;
  color: #ffffff;
  text-align: center;
  font-size: 14px;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}


/* For mobile phones: */
[class*="col-"] {
  width: 100%;
}

@media only screen and (min-width: 600px) {
  /* For tablets: */
  .col-s-1 {width: 8.33%;}
  .col-s-2 {width: 16.66%;}
  .col-s-3 {width: 25%;}
  .col-s-4 {width: 33.33%;}
  .col-s-5 {width: 41.66%;}
  .col-s-6 {width: 50%;}
  .col-s-7 {width: 58.33%;}
  .col-s-8 {width: 66.66%;}
  .col-s-9 {width: 75%;}
  .col-s-10 {width: 83.33%;}
  .col-s-11 {width: 91.66%;}
  .col-s-12 {width: 100%;}
}
@media only screen and (min-width: 768px) {
  /* For desktop: */
  .col-1 {width: 8.33%;}
  .col-2 {width: 16.66%;}
  .col-3 {width: 25%;}
  .col-4 {width: 33.33%;}
  .col-5 {width: 41.66%;}
  .col-6 {width: 50%;}
  .col-7 {width: 58.33%;}
  .col-8 {width: 66.66%;}
  .col-9 {width: 75%;}
  .col-10 {width: 83.33%;}
  .col-11 {width: 91.66%;}
  .col-12 {width: 100%;}
}
</style>

</head>
<body>
<div class="left">
<? if($_SESSION['islogin']){ ?>
    <a href= "ab_logout.php">로그아웃</a>
    <?print_r( $_SESSION['islogin']); ?>님 
    <a href= "ab_mydex.php">&nbsp&nbsp&nbsp나의 등록페이지</a><br>
    
<? }else{ ?>
    <a href= "ab_sign.php">회원가입</a>
     <a href ="ab_login.php">로그인</a>   
     <?}?>
</div>
<div class="w3-panel" align="center">
<div class="w3-tag w3-jumbo w3-red">무</div>
<div class="w3-tag w3-jumbo">대</div>
<div class="w3-tag w3-jumbo w3-yellow">콜</div>
</div>

<div>
  <h3 align="right" class="w3-text-black">가수,MC 또는 예술인들이  회원등록을 하시면 행사희망자들이 컨택을 하는 플랫홈.광고,행사섭외플랫홈 .일정기간 등록비 무료.</h3><h5 class="w3-text-red"align="right"><br></h5>
</div>

  <div class="w3-bar w3-green">
  <a href="index.php" class="w3-bar-item w3-button w3-mobile">home</a>
  <a href="index_mc.php" class="w3-bar-item w3-button w3-mobile">사회자</a>
  <a href="index_gasu.php" class="w3-bar-item w3-button w3-mobile">가수</a>
  <a href="index_ads.php" class="w3-bar-item w3-button w3-mobile">스타광고섭외</a>
</div>
<hr>
<div class="w3-container w3-center w3-teal">
  
  <p> <?
    include"in_search.php";
    ?></p>
  
  </div>

<hr>
<table>
<div class="footer">
<table  width="100%" height="1px" > </table>
</div>
<div><p align="right"></p></div>

<div>
 
  <p class="style9 " >무 대콜 ,<a href="ab_terms_use.php" >이용약관</a></p>
  <p>무대콜 본사이트는 광고및 통신판매자로서 각종 행사및 거래에 대해서 주 거래 당사자가 아니며 민,형사상 일체 책임을 지지 않습니다.<br>

  <p> 무대콜 팀원 일동</p>
</div>
</div>  
</table>
 </body>
  </html>