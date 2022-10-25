<?
  session_start();  
  include "lib.php";
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ko" lang="ko">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Type" content="text/html; charset=euckr" />
<meta http-equiv=content-type content=text/html; charset=euc-kr>

  <title>로그인 마론스</title>

  <meta name="viewport" content="width=device-width, initial-scale=1" />

<link rel="stylesheet" href="style.css" type="text/css" />
<link rel="stylesheet" href="style.css" type="text/css" />


<?
//include"valida.php";
//include"empty.php";
//include"comp.php";

?>

<head>

<title>로그인   </title>

</head>

<body>
 <h1>Hello, world!</h1>
        <hr />
        <h2>로그인</h2>
        <?php if(!isset($_SESSION['username']) || !isset($_SESSION['password'])) { ?>
        <form method="post" action="login_post.php">
            <p>아이디: <input type="text" name="username" /></p>
            <p>비밀번호: <input type="password" name="password" /></p>
            <p><input type="submit" value="로그인" /></p>
        </form>
        <button onclick="location.href='sign_input.php'">회원가입</button>
        <?php } else {
            $user_id = $_SESSION['username'];
            $user_name = $_SESSION['password'];
            echo "<p><strong>$user_name</strong>($username)님은 이미 로그인하고 있습니다. ";
            echo "<a href=\"list.php\">[돌아가기]</a> ";
            echo "<a href=\"logout.php\">[로그아웃]</a></p>";
        } ?>
</body>
</html>
