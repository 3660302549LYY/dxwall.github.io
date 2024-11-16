<!doctype html>
<html>
	
<head>



<?
session_start();


echo"<title>".$_SESSION['usernameone']."的主页</title>";
  
  ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 



<style>

	html{
	background:url(images/1.jpg);
	background-attachment: fixed;
	background-repeat:no-repeat;
	height:100%;
	width:100%;
	background-size:100% 100%;    
	}
header{

    height:160px;
    text-align:center;
    width:100%;
    background-color:rgba(000,000,255,0.5);
}
#header1{
font-size:50px;
}
.back{
  margin-right:40%;



}
.piece{
height:150px;


}
.titl{
font-size:50px;
}
.button{
width:500px;
height:100px;
font-size:50px;
margin-left:40%;
}
</style>
</head>
<body>
<header>

<div>

<p id="header1">
<span class="back" onclick="window.history.go(-1);">返回</span>
<? echo $_SESSION['usernameone']; ?>的主页</p>


<div>

</header>
<div>
<div class="piece">
<p class="titl">用户名：<? echo $_SESSION['usernameone']; ?> </p>

</div>
<div style="background:black;">
<p class="button"><a href="t.php">退出登录</a></p>

</div>
</div>
</body>
</html>

