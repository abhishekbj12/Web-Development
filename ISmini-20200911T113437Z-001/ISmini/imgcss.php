<?php
include 'connect.php';
$title_arr=mysqli_fetch_array($conn->query("SELECT s_title from story  where l_num=0"));
$imgpath=array();
$res=$conn->query("SELECT COUNT(*) from story");
if ($row= $res->fetch_assoc())
for($i=1;$i<=$row['COUNT(*)'];$i++)
{
  $title=$title_arr[$i-1];
  $p_img=array("image/",$title,".jpg");
  $pathimg=join("",$p_img);
  array_push($imgpath,$pathimg);
}
ob_start();
for($i=0;$i<$row['COUNT(*)'];$i++)
{
  echo ".div".$i." {background-image: url(\"".$imgpath[$i]."\");}";
}
$css=ob_get_contents();
ob_end_clean();
file_put_contents("css/imggenerated.css",$css);
?>
