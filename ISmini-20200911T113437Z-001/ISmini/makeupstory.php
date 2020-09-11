<?php session_start();
if(isset($_SESSION['ss_id'])) $uname=$_SESSION['ss_id']; else $uname=1;
 ?>
<html>
<head>
  <title>MAKEUP STORIES</title>
  <link rel="stylesheet" href="">
  <style>
    #content{padding: 1em;
  background: #EEE;}
  </style>
  <script src="form/dist/l12js" type="text/javascript"></script>
  <link rel="icon" href="./icon/site.ico" type="image/icon type">
  <link rel="stylesheet" href="form/dist/l14.css">
  <link rel='stylesheet' href='form/dist/l15.css'>
  <link rel="stylesheet" href="./style.css">
  <script>
    function back(){window.location.replace("storylane.php");}
  </script>
</head>
<body>
  <div class='topbar'>
    <div ><img src="icon/back.png" style="transform: rotate(180);" onclick="back()"></div><div></div>
  </div>
  <div id=content>
    <form role="form" method="post" action="store.php">
  <h3>DIGI PAPER FOR WRITERS</h3>
  <div class="form-group">
    <label for="input-fileName">STORY TITLE</label>
    <input type="text" class="form-control" id="input-fileName" name="title" placeholder="Enter story title">
  </div>
  <p>**FOLLOW THIS FORMAT FOR LINE 1 ALWAYS--format(Genre with space for multiple genres)<BR>press ENTER AND START WITH YOUR STORY IN  2ND LINE</p>
  <div class="form-group">
    <label for="textarea">Text</label>
    <textarea id="textarea" class="form-control" name="story" rows="10" placeholder="Your work begins here"></textarea>
  </div>
  <button id="btn-save" type="submit" class="btn btn-primary">MAKE</button>
</form>
  </div>
</body>
</html>
