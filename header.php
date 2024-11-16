<?

session_start();



?>
<header>
<div id='head' class='head1'>
<p id='title'>职大校园墙
<?

if(isset($_SESSION['usernameone']))
{

echo"<span><a class='user'href='user.php'><img border='0' src='".$_SESSION['head1']."' alt='Pulpit rock' width='50'></a></span>";
}

else{
echo"<span id='login'><a class='user' href='login.htm'>未登录</a></span>";
}

?>

</p>
</div>

</header>