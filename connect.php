<?

$link = mysqli_connect('localhost','root','3160302849LYY') or die('不能连接到数据库').mysqli_error($link);
$conn = mysqli_select_db($link,'schoolwall');
if($conn){
    echo '数据库连接成功';
}




?>