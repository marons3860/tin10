<?
  session_start();  
  include "lib.php";
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//ko" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ko" lang="ko">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Type" content="text/html; charset=euckr" />
<meta http-equiv=content-type content=text/html; charset=euc-kr>
<meta name="viewport" content="width=device-width, initial-scale=1" />

<link rel="stylesheet" href="style.css" type="text/css" />
<link rel="stylesheet" href="style.css" type="text/css" />
<head>

<title>홈   </title>
</head>
<body>

  <h1>홈에도착</h1>
       <?
            if(!isset($_SESSION['username']) || !isset($_SESSION['password'])) {
                echo "<p>로그인을 해 주세요. <a href=\"login.php\">[로그인]</a></p>";
            } else {
                $password = $_SESSION['password'];
                $username = $_SESSION['username'];
                echo "<p><strong>$username</strong>($username)님 환영합니다.";
                
                
                echo "<a href=\"logout.php\">[로그아웃]</a></p>";
            }
        ?>
        <hr />
        <p>투명한 유리구슬처럼 보이지만 그렇게 쉽게 깨지진 않을 거야</p>
   
</body>
</html>