<?

session_start();


 
  $_SESSION["username"]  = ''; 
 /* $_SESSION["pwd"]   = ''; 
  $_SESSION["id"]    = ''; 
*/  $_SESSION["name"]  = ''; 
  session_destroy(); 
  echo "
  <script>alert('退出成功！');location.href='index.php'; </script>
  "; 
  ?>