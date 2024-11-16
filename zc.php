
<?
    header("Content-Type: text/html; charset=utf8");
    session_start();
    if(!isset($_POST['submit'])){
        exit("错误执行");
    }//判断是否有submit操作

    $name=$_POST['username'];//post获取表单里的name
    $password=$_POST['password'];//post获取表单里的password
    $tel=$_POST['tel'];
    include('connect.php');//链接数据库
    $q="insert into uses(username,password,tel,head) values ('$name','$password','$tel','images/e2cf885ca95675b7.webp')";//向数据库插入表单传来的值的sql
    $reslut=mysqli_query($link,$q);//执行sql
    
    if (!$reslut){
        die('Error: ' . mysqli_error($link));//如果sql执行失败输出错误
    }else{
        
        echo "注册成功";//成功输出注册成功
        include('connect.php');
        $sql2="select head from uses where username = '$name'";
        $sq="select * from uses where username = '$name'";
        $r= mysqli_query($link,$sql2);
        $r2=mysqli_query($link,$sq);
        $rows2=mysqli_fetch_array($r);
        $row=mysqli_fetch_array($r2);

        $_SESSION['usernameone']=$row[0];
        $_SESSION['head1']=$rows2[0];


        echo "
                    <script>
                            setTimeout(function(){window.location.href='index.php';},1);
                    </script>
        ";
    }

    

    mysqli_close($link);//关闭数据库

?>