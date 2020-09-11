<?php session_start();
$uid=$_POST['uname2'];
$email=$_POST['email'];
$phno=$_POST['phno'];
$pass=$_POST['pass2'];
include 'connect.php';
$res=$conn->query("SELECT name,mail FROM users");
while ($row = $res->fetch_assoc())
{ if($row['name']==$uid or $row['mail']==$email)
  { echo("<script>alert('USER_ID or MAIL_ID already EXIST.  try logging in or register with different USER_ID or MAIL_ID');document.location='http://localhost/ISmini/login.php'</script>");
    break;
  }
 }
$res=$conn->query("INSERT into users values('$uid','','$email','$pass',CURRENT_TIMESTAMP,$phno)");
if ($res == TRUE) {
echo("<script>alert('REGISTERED SUCCESFULLY now login start reading');document.location='./login.php'</script>");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
