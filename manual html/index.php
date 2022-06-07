<?php 

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title></title>
</head>
<body>
<!--Navigation divs -->
<div class="Nav_container">
<div class="h1_container">
<h1>My Portfolio</h1>
</div>
	<div class="topnav" id="myTopnav">
  
  <a href="index.php" class="active">Home</a>
  <a href="About.php">About</a>
  <a href="Contact.php">Contact</a>
  <a href="Blogs.php">Blogs</a>
  <div class="dropdown">
    <button class="dropbtn">Dropdown 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="About.php">About</a>
      <a href="Contact.php">Contact</a>
      <a href="Blogs.php">Blogs</a>
    </div>
  </div> 
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>
</div>



<!--Hero divs-->
	
<div class="hero-image">
  <img src="Portfolio profile.png">
  <div class="hero-text">
    <h1>I am Neil Adrian G. Balolong</h1>
    <p>And I'm a Front End Developer</p>
    <button>Hire me</button>
  </div>
</div>


<script type="text/javascript" src="index.js"></script>
</body>

<footer>
  <p>
  Copyright Neil Adrian Balolong 2022
</p>
</footer>
</html>