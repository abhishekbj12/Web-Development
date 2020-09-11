<?php session_start();
include 'connect.php';
 ?>
<html>
  <head>
    <title>TECHNOLOGY</title>
    <link rel="icon" href="icon/site.ico" type="image/icon type">
    <link rel="stylesheet" type"text/css" href="css/common.css">
    <link rel="stylesheet" type="text/css" href="css/technology.css">
    <style>   #d1{ position: fixed;
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
        <div style="height: 10px;width: 100%;"><span onclick="openNav()">&#9776;</span></div><center>TECHNOLOGY</center>

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
        <h2><center>HTML 5</center></H2>
          <P>HTML5 is a software solution stack that defines the properties and behaviors of web page content by implementing a markup based pattern to it.
HTML5 is the fifth and current major version of HTML, and subsumes XHTML. The current standard, the HTML Living Standard is developed by WHATWG, which is made up of the major browser vendors (Apple, Google, Mozilla, and Microsoft), with the Living Standard also existing in an abridged version.


Many new syntactic features are included. To natively include and handle multimedia and graphical content, the new <\video>, <\audio> and <\canvas> elements were added, and support for scalable vector graphics (SVG) content and MathML for mathematical formulas. To enrich the semantic content of documents, new page structure elements such as <\main>, <\section>, <\article>, <\header>, <\footer>, <\aside>, <\nav>, and <\figure> are added. New attributes are introduced, some elements and attributes have been removed, and others such as <\a>, <\cite>, and <\menu> have been changed, redefined, or standardized.  </p>
      </div>
      <div class=contain>
        <h2><center>CSS 3</center></H2>
          <P>Cascading style sheets (CSS) is the visual language of the web, controlling everything visual about a website, from background colors and navigation bars to fonts and text alignment. CSS allows developers and designers to create the style and layout of a page and add global styling to all pages.
            CSS works in tandem with HTML to give a site its static structure and style. While HTML defines what elements are on a page, CSS defines how those HTML elements appear.
            CSS3 is the latest standard for the CSS language, under development since 2005. It’s backwards-compatible with older versions of CSS, and has new properties that debug previous quirks and extend CSS2 features, and it’s even got some JavaScript-like capabilities. CSS3 has also addressed a number of mobile development concerns, accounting for responsive design and making up for issues caused by Adobe Flash incompatibility on mobile devices. In combination with JavaScript, CSS3 has a lot of the functionality of Flash now–animation- and interactivity-wise.
          </p>
      </div>
      <div class=contain>
        <h2><center>JAVASCRIPT</center></H2>
          <P>JavaScript® (often shortened to JS) is a lightweight, interpreted, object-oriented language with first-class functions, and is best known as the scripting language for Web pages, but it's used in many non-browser environments as well. It is a prototype-based, multi-paradigm scripting language that is dynamic, and supports object-oriented, imperative, and functional programming styles.

JavaScript runs on the client side of the web, which can be used to design / program how the web pages behave on the occurrence of an event. JavaScript is an easy to learn and also powerful scripting language, widely used for controlling web page behavior.

          </p>
      </div>
      <div class=contain>
        <h2><center>PHP</center></H2>
          <P>PHP (recursive acronym for PHP: Hypertext Preprocessor) is a widely-used open source general-purpose scripting language that is especially suited for web development and can be embedded into HTML.
            PHP code may be executed with a command line interface (CLI), embedded into HTML code, or used in combination with various web template systems, web content management systems, and web frameworks. PHP code is usually processed by a PHP interpreter implemented as a module in a web server or as a Common Gateway Interface (CGI) executable. The web server outputs the results of the interpreted and executed PHP code, which may be any type of data, such as generated HTML code or binary image data. PHP can be used for many programming tasks outside of the web context, such as standalone graphical applications and robotic drone control.

          </p>
      </div>
    </div>
  </body>
  </html>
