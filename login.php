<?PHP
    
    session_start();
    if(!isset($_POST["submit"])){
        exit("错误执行");
    }//检测是否有submit操作 

    include('connect.php');//链接数据库
    $name = $_POST['username'];//post获得用户名表单值
    $passowrd = $_POST['password'];//post获得用户密码单值

    if ($name && $passowrd){//如果用户名和密码都不为空
             $sql = "select * from uses where username = '$name' and password='$passowrd'";
             $sql2="select head from uses where username = '$name'";
             //检测数据库是否有对应的username和password的sql
             $resul = mysqli_query($link, $sql);//执行sql
             $r= mysqli_query($link,$sql2);
             $rows=mysqli_num_rows($resul);//返回一个数值
             $rows2=mysqli_fetch_array($r);
            echo"$rows2[0]";
             if($rows){//0 false 1 true
             
             
             

          $_SESSION['usernameone']=$name;
          $_SESSION['head1']=$rows2[0];
                   header("refresh:0;url=index.php");//如果成功跳转至welcome.html页面
                   exit;
             }else{
                echo "用户名或密码错误";
                echo "
                    <script>
                            setTimeout(function(){window.location.href='login.htm';},1000);
                    </script>

                ";//如果错误使用js 1秒后跳转到登录页面重试，让其从新进行输入
             }
             

    }else{//如果用户名或密码有空
                echo "表单填写不完整";
                echo "
                      <script>
                            setTimeout(function(){window.location.href='login.htm';},1000);
                      </script>";
                        //如果错误使用js 1秒后跳转到登录页面重试，让其从新进行输入
    }

    mysqli_close($link);//关闭数据库
?>
