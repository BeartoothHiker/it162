<!DOCTYPE html>
<html>
<head>
<title>JRo's IT162 Portal</title>
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="noindex,nofollow" />
<meta charset="utf-8">
<script src="https://use.fontawesome.com/6a71565c22.js"></script>
<link rel="stylesheet" href="css/nav.css" />
<link rel="stylesheet" href="css/portal.css" />
<link rel="stylesheet" href="css/form.css" />
</head>

<body>
<!-- START WRAPPER -->
<main class="wrapper">
<header>
  <h1><a href="index.php"><i class="logo fa fa-home"></i> Jeremy Robinson's Portal for IT162</a></h1>
  <nav>
    <ul class="topnav" id="myTopnav">
      <li><a href="index.php" class="selected">Welcome</a></li>
      <li><a href="big/index.php">Big</a></li>
      <li><a href="aia.php">AIA</a></li>
      <li><a href="flowchart.php">Flowchart/Layout</a></li>
      <li><a href="fp/index.php">Final Project</a></li>
      <li><a href="contactme.php">Contact Jeremy</a></li>
      <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
    </ul>
  </nav>
</header>
        
<!-- START LEFT COL -->
<section>
 <h2 class="pageID">Welcome</h2>

<!-- MAKE SURE YOU GET YOUR (3) IMAGES SAVED INTO YOUR IMAGES FOLDER -->
 <img src="images/beartooth-boys-meadow.jpg" class="desktop" alt="hikers in meadow" />
 <img src="images/doodle-floor.jpg" class="phone" alt="sleeping puppy" />
 <p>Hello and welcome to my IT 162 portal page.  My name is Jeremy and am studying Web and Mobile Devleopment at Seattle Central. I have been programming in Windows and embedded systems for awhile, and I am excited to learn how to build modern websites. The programming and scripting is pretty natural for me, but I find the graphic design and aesthetic to be challenging. My longer term goal is a Solutions Architect role.</p>
 <p>My wife and I have two teenage boys, one who is attending Seattle Central. We also have a goofy goldendoodle and a couple of naughty kitties (one who is addicted to popcorn and tortilla chips).</p>
 <p>Outside of work, I like to get outdoors with my boys. We have been on a number of backpacking trips in Montana, Wyoming and Washignton .  More often, however, we enjoy playing card and games which I usually lose.<p>
</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
 <h3>Right Column</h3>
 <img src="images/beartooth-pumping-water.jpg" class="tablet" alt="man near mountain stream" />
 <img src="images/doodle-floor.jpg" class="desktop" alt="sleeping puppy" />
 <p></p>
 <p>Lorem Ipsum place holder text goes here for now</p>
</aside>
<!-- END RIGHT COL -->
 
<!-- START Footer -->
  <footer>
      <p><small>&copy; 2021-<?=date("Y")?> by 
          <a href="contact.php">Jeremy Robinson</a>, All Rights Reserved ~ 
          <a id="html-checker" href="#">Check HTML</a> ~ 
          <a id="css-checker" href="#">Check CSS</a></small>
     </p>
    </footer>
<!-- END Footer --> 
</main>
<!-- END WRAPPER -->

    



  <script>
	//https://tinyurl.com/dynamic-html-checker
	document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
            document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href); 

	//manages mobile nav - from W3Schools
	function myFunction() {
    	    var x = document.getElementById("myTopnav");
    	    if (x.className === "topnav") {
        	         x.className += " responsive";
    	    } else {
        	         x.className = "topnav";
    	   }
	}   
 </script>
</body>
</html>
