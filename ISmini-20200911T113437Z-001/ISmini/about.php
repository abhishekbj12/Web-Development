<?php session_start();
include 'connect.php';
 ?>
<html>
  <head>
    <title>ABOUT</title>
    <link rel="icon" href="icon/site.ico" type="image/icon type">
    <link rel="stylesheet" type"text/css" href="css/common.css">
    <link rel="stylesheet" type="text/css" href="css/about.css">
    <style>
    #d1{ position: fixed;
        top: 0.01em;
        right:1em;
        background: url("icon/house.png");
        background-size: cover;
      }
      #d2{ position: fixed;
             top: 6em;
             right:1em;
           background: url("icon/login.png");
           background-size: cover;
         }
    </style>
    <script>
      function home(){window.location.replace("index.html");}
      function logout(){window.location.replace("logout.php")}
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
    <div class='topbar' >
        <div style="height: 10px;width: 100%;"><span onclick="openNav()">&#9776;</span></div><center>ABOUT OUR WORK</center>

        <script>
        function openNav() {
          document.getElementById("Sidenav").style.width = "250px";
        }

        function closeNav() {
          document.getElementById("Sidenav").style.width = "0";
        }
        </script>
    </div>
    <div style="padding-left:10em;padding-right:4em;">
      <div class=contain>
        <h2><center>STORY</center></H2>
          <P>A story or narrative is a connected series of events told through words (written or spoken), imagery (still and moving), body language, performance, music, or any other form of communication. You can tell a story about anything, and the events described can be real or imaginary; covering both fiction and nonfiction; and leaving no topic, genre, or style untouched. There are stories about all things and all times; past, present and future. Whenever you’re telling somebody about a series of events, you are telling a story, no matter what the subject nor when they occurred. As such, stories are of great value to human culture, and are some of the oldest, most important parts of life.  </p>
      </div>
      <div class=contain>
        <h2><center>INTERACTIVE STORY</center></H2>
          <P>Interactive stories is a form of digital entertainment in which the storyline is not predetermined. The author creates the setting, characters, and situation which the narrative must address, but the user experiences a unique story based on their interactions with the story world. The architecture of an interactive storytelling program includes a drama manager, user model, and agent model to control, respectively, aspects of narrative production, player uniqueness, and character knowledge and behavior. Together, these systems generate characters that act "human", alter the world in real-time reactions to the user, and ensure that new narrative events unfold comprehensibly.<br>
            example liks--<br>http://www.sbs.com.au/theboat/">[The Boat]<br>http://theenemyishere.org/ [The Enemy]
          </p>
      </div>
      <div class=contain>
        <h2><center>OUR PROJECT</center></H2>
          <P>INTERACTIVE STORIES is a web site that offers mostly to the writers commununity, to help them spread their wings by making their passion reach an audience and find feedback over their work. A user who gets involed with sites service can read many number of stories written  by passonate and acheiving  writers. He or she can get involved further by writing their own stories and publish it on our platform. Further the the stories on this platform can be voted upon by the registred users.the votes can be positive and negative , this allows to gauge a value for every story.
          </p>
      </div>
    </div>

  </body>
  </html>
