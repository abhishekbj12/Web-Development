<?php session_start();
$pass=$_POST["pass"];
$uname=$_POST["uname"];
include 'connect.php';
$res=$conn->query("SELECT name,password,id FROM users");
while ($row = $res->fetch_assoc())
{ if($row['name']==$uname and $row['password']==$pass)
  {
    $_SESSION['ss_id']=$uname;$_SESSION['uid']=$row['id'];
    echo("<script>window.location.replace('storylane.php');</script>");
  }
 }
echo("<script>alert('USER NAME or PASSWORD wrong!! TRY AGAIN... else REGISER');document.location='login.php';</script>");
?>
