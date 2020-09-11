<?php session_start();
include 'connect.php';
$title=$_GET['t'] or $title="gift of the forest";
$uid=$_SESSION['ss_id'] or $title=1;
$p_arr=array("story/",$title,".txt");
$p_img=array("ISmini/image/",$title,".jpg");
$pathimg=join("",$p_img);
$path=join("",$p_arr);
$str=file_get_contents($path);
$arr=explode("\n",$str);
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>STORY PANEL</title>
  <link rel="icon" href="./icon/site.ico" type="image/icon type">
  <link rel="stylesheet" href="storypanel/dist/style.css">
  <script>
  document.addEventListener('DOMContentLoaded', () => {
    'use strict';

    document.addEventListener('keydown', event => {
        const key = event.key.toLowerCase();
        if(key==="backspace"){window.location.replace('storylane.php')}
    });
});
  </script>

</head>
<body>
<!-- partial:index.partial.html -->
<?php
$sql="SELECT * from story where s_title=\"".$title."\"";
$res=$conn->query($sql);
if($res->num_rows > 0)
while ($row=$res->fetch_assoc())
{
  $aid=$row['id'];$snum=$row['l_num'];$enum=$row['ll_num'];
  $gv=$row['g_vote'];$bv=$row['b_vote'];$vlist=$row['vote_ids'];
}
$s=array_slice($arr,1,$enum);

$sql="SELECT * from users where id=$aid";
$res=$conn->query($sql);
if($res->num_rows > 0)
while ($row=$res->fetch_assoc())
{
  $aname=$row['name'];$mail=$row['mail'];$dt=$row['reg_time'];
}

?>



<h1><?php echo $title  ?><span><?php echo $arr[0];  ?></span></h1>
<ul class="tabs" role="tablist">
    <li>
        <input type="radio" name="tabs" id="tab1" checked />
        <label for="tab1"
               role="tab"
               aria-selected="true"
               aria-controls="panel1"
               tabindex="0">READER</label>
        <div id="tab-content1"
             class="tab-content"
             role="tabpanel"
             aria-labelledby="description"
             aria-hidden="false">
          <p>
            <?php
              echo join("\n",$s);
             ?>
          </p>
        </div>

    </li>

    <li>
        <input type="radio" name="tabs" id="tab2" />
        <label for="tab2"
               role="tab"
               aria-selected="false"
               aria-controls="panel2"
               tabindex="0">WRITER</label>
        <div id="tab-content2"
             class="tab-content"
             role="tabpanel"
             aria-labelledby="specification"
             aria-hidden="true">
          <div>
              AUTHOUR :<?php echo "-  ".$aname;  ?><br><br>
              MAIL-ID :<?php echo "-  ".$mail;  ?><br><br>
              WITH US FROM: <?php echo "-  ".$dt; ?><br><br>
          </div>
        </div>
    </li>
</ul>
<br style="clear: both;"/>

<!-- partial -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
</body>
</html>
