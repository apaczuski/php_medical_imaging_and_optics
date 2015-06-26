<?php

function request_URI() {

    if(!isset($_SERVER['REQUEST_URI'])) {
        $_SERVER['REQUEST_URI'] = $_SERVER['SCRIPT_NAME'];
        if($_SERVER['QUERY_STRING']) {
            $_SERVER['REQUEST_URI'] .= '?' . $_SERVER['QUERY_STRING'];
        }
    }
    return $_SERVER['REQUEST_URI'];
}

$_SERVER['REQUEST_URI'] = request_URI();

//echo basename($_SERVER['PHP_SELF']);




?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Endoscopy</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="header_wrapper">
  <div id="header">
    <div id="site_title">
      <h1><a href="#"><span>Wentworth Institute of Technology</span><span>Medical Imaging & Optics</span> </a></h1>
    </div>
    <p>Welcome to an interactive lesson in endoscopy! Feel free to use the window below using the next and back buttons to explore each slide.</p>
  </div>
  <!-- end of header -->
</div>
<!-- end of menu_wrapper -->
<div id="menu_wrapper">
  <div id="menu">
    <ul>
	
      <li><a href='javascript:;' onclick='show_more_menu();'>Home</a></li>
      <li><a href="Lesson_0.php">Begin Lesson</a></li>
      <li><a href="Quizzes.php">Quiz</a></li>
      <li><a href="https://en.wikipedia.org/wiki/Endoscopy">Research</a></li>
      <li><a href="htttp://wit.edu">WIT</a></li>
      <li><a href="Sources.html">Sources</a></li>
    </ul>
  </div>

  <!-- end of menu -->
</div>
<div id="content_wrapper">
  <div id="sidebar">
    <div class="sidebar_box">
      <h2>Announcements</h2>
      <div class="news_box"> <a href="#">Fusce sit amet nunc lectus, at pretium augue. Pellentesque tortor felis.</a>
        <p class="post_info">Posted by <a href="#">Admin</a> on <span>April 30, 2048</span></p>
      </div>
      <div class="news_box"> <a href="#">Integer imperdiet, justo ut venenatis vehicula, magna mi placerat felis.</a>
        <p class="post_info">Posted by <a href="#">Admin</a> on <span>April 22, 2048</span></p>
      </div>
      <div class="news_box"> <a href="#">Sed justo dolor, convallis at, vestibulum vitae, elementum eu, pede.</a>
        <p class="post_info">Posted by <a href="#">Admin</a> on <span>April 14, 2048</span></p>
      </div>
    </div>
    <div class="sidebar_box_bottom"></div>
    <div class="sidebar_box">
      <h2>Newsletter</h2>
      <form action="#" method="get">
        <label>Please enter your email address to subscribe our newsletter.</label>
        <input type="text" value="" name="username" size="10" id="input_field" />
        <input type="submit" name="login" value="Subscribe" alt="login" id="submit_btn" />
      </form>
      <div class="cleaner"></div>
    </div>
    <div class="sidebar_box_bottom"></div>
  </div>
  <!-- end of sidebar -->
  <div id="content">
    <div class="content_box">
      <h2>Welcome to Education</h2>
      <p> Free CSS Templates are provided by TemplateMo.com for everyone. You may download, edit and apply this template for your websites. Credit goes to <a href="#">Public Domain Pictures</a> for photos used in this template. Nam ut libero at lacus feugiat tincidunt vitae sed ipsum.</p>
      <div class="cleaner_h20"></div>
      <div class="image_fl"> <img src="images/images01.jpg" alt="" /> </div>
      <div class="section_w250 float_r">
        <ul class="list_01">
          <li>Praesent condimentum magna ut </li>
          <li>Nunc luctus eros eu enim gravida ut </li>
          <li>Phasellus nec ante eget felis </li>
          <li>Morbi pellentesque tellus adipiscing </li>
          <li>Nunc accumsan sagittis sem, ut </li>
          <li>Nunc luctus eros eu enim gravida ut </li>
          <li>Phasellus nec ante eget felis </li>
        </ul>
      </div>
      <div class="cleaner"></div>
    </div>
    <div class="content_box_bottom"></div>
      <div class="cleaner"></div>
    </div>

  <!-- end of content -->
  <div class="cleaner"></div>
</div>
<div id="footer_wrapper">
  <div id="footer">
 <!--   <ul class="footer_menu">
      <li><a href="#">Home</a></li>
      <li><a href="#">Templates</a></li>
      <li><a href="#">Flash Files</a></li>
      <li><a href="#">Gallery</a></li>
      <li><a href="#">Members</a></li>
      <li class="last_menu"><a href="#">Contact Us</a></li>
    </ul>-->
    <address>
Written by: <br>
Nicholas Anderson<br>
Rachael Camara<br>
Adam Paczuski<br>
</address>
</div>
</body>
</html>
