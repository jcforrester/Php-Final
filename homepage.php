<!DOCTYPE html>
<html lang = "en">
<head>
	<title>PHP project14</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
	<script src="https://use.fontawesome.com/bd9b9ca2f3.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="php.css">
</head>
<body>

	 <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="http://web-students.pstcc.edu/web2603ww1/jcforrester/project14/homepage.php">PHP Final</a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="http://web-students.pstcc.edu/web2603ww1/jcforrester/project14/homepage.php">Home</a></li>
        <li><a href="http://web-students.pstcc.edu/web2603ww1/jcforrester/project14/contact.php">Contact</a></li>
        <li><a href="http://web-students.pstcc.edu/web2603ww1/jcforrester/project14/madlib.php">Mad Lib</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="http://web-students.pstcc.edu/web2603ww1/jcforrester/index.html">Back to Main <i class="fa fa-home" aria-hidden="true"></i></a></li>
      </ul>
    </div>
  </div>
 </nav>

<div class = "container">
	<div class = "main">
    <h1>Welcome to the Final Project</h1>
Hey there. Welcome to my homepage for the Final PHP assignment. I have elected to use PHP, as it's
easier to see and visually easier to grade/examine. The instructions were to use 3 elements from the
year on a page. This tiny website has all 3. Part 1 is the footer on this page, part 2 is the contact
form, and part 3 is the mad lib. The contact form has full PHP validation, with a hint of Jquery on the email address, although it is checking the email address on the server as well. The mad lib uses solely Jquery to check if the user gave input, then plugs the new variables into a mad lib. The whole site is powered by bootstrap. Enjoy!
</div>
</div>


<div id="footer">

<?php
$string = <<< ftr_content
Thank you for checking out my site. This footer was dynamically generated via PHP from the server.
This is part 1 of the final assignment. This page is current as of:
ftr_content;

echo $string;
echo "<br>";
echo date("m/d/Y") . "<br>";
?>
</div>


 <script   src="https://code.jquery.com/jquery-2.2.3.js"   integrity="sha256-laXWtGydpwqJ8JA+X9x2miwmaiKhn8tVmOVEigRNtP4="   crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

</body>
</html>