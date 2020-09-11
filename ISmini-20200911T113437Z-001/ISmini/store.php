<?php
session_start();
$uid=$_SESSION['uid'];
$name=$_SESSION['ss_id'];
$tit=$_POST['title'];
$sto=$_POST['story'];
$path="story/".$tit.".txt";
$f=fopen($path,'w');
fwrite($f,$sto);
fclose($f);
include "connect.php";
$enum=count(file($path));
$res=$conn->query("SELECT MAX(sid) FROM story");
while ($row = $res->fetch_assoc())
 {$id=1+$row['MAX(sid)'];break;}

 $sql="INSERT INTO `story` VALUES ('$uid',\"$tit\", $id, '0', $enum, '', '', '', '0')";
 if ($conn->query($sql) === TRUE) {
     echo "Story created successfully";
     echo("<script>window.location.replace('storylane.php');</script>");
 } else {
     echo "Error: " . $sql . "<br>" . $conn->error;
 }
?>
