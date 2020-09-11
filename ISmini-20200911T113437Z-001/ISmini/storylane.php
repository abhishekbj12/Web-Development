<?php session_start();
include 'connect.php';
?>
<html>
  <head>
    <title>STORY LANE</title>
    <link rel="icon" href="icon/site.ico" type="image/icon type">
    <link rel="stylesheet" type"text/css" href="css/common.css">
    <link rel="stylesheet" type="text/css" href="css/storylane.css">
    <link rel="stylesheet" type="test/css" href="css/imggenerated.css" >
    <style>
    #d1{ position: fixed;
        top: 0.01em;
        right:1em;
      background: url("icon/house.png");
      background-size: cover;
    }
    #d2{ position: fixed;
      float: right;
           top: 6em;
           right:1em;
         background: url("icon/login.png");
         background-size: cover;
       }
    </style>
    <script>
      function home(){window.location.replace("index.html");}
      function logout(){window.location.replace("logout.php");}
      function makeupstory(){window.location.replace("makeupstory.php");}
    </script>
  </head>
  <body>
    <div class=sticky id=d1  onclick="home()"></div>
    <div id=d2 class=sticky onclick="logout()"></div>

    <div id="Sidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" >&times;</a>
    <a href="storylane.php">STORY LANE<hr></a>
    <a href="technology.php">TECHNOLOGIES<hr></a>
    <a href="about.php">ABOUTS<hr></a>
  </div>
  <div class='topbar'>
      <div style="height: 10px;width: 10px"><span onclick="openNav()">&#9776;</span></div><center>STORY LANE</center>

      <script>
      function openNav() {
        document.getElementById("Sidenav").style.width = "250px";
      }

      function closeNav() {
        document.getElementById("Sidenav").style.width = "0";
      }
      </script>
  </div>
    <div class=content>
      <?php $title_arr=array();
      $res=$conn->query("SELECT s_title from story  where l_num=0");
      if($res->num_rows>0) while($r=$res->fetch_assoc())
      array_push($title_arr,$r['s_title']);
      $res=$conn->query("SELECT COUNT(*) from story");
      if ($row= $res->fetch_assoc())
      for($i=1;$i<=$row['COUNT(*)'];$i++)
      {
        $title=$title_arr[$i-1];
        $p_arr=array("story/",$title,".txt");
        $p_img=array("image/",$title,".jpg");
        $pathimg=join("",$p_img);
        $path=join("",$p_arr);
        $f=fopen($path,"r");
        $str=file_get_contents($path);
        $arr=explode("\n",$str);
        echo "<script>function panel".($i-1)."(){window.location.replace(\"storypanel.php?t=".$title."\");}</script>";
        echo "<div  class=\"story div".($i-1)."\" onclick='panel".($i-1)."()'>";
        echo " ".$title."<hr>".$arr[0];
        echo "</div>";
      #echo"<script>document.getElementById('div_in').style.backgroundImage = \"url('".$pathimg."')\";</script>";
        fclose($f);
      }
      ?>
      <div class=add-story onclick="makeupstory()">
        +</div>
    </div>
  </body>
</html>
