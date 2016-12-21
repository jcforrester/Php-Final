<!DOCTYPE html>
<html lang = "en">
<head>
	<title>Mad Libs</title>
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
        <li><a href="http://web-students.pstcc.edu/web2603ww1/jcforrester/project14/homepage.php">Home</a></li>
        <li><a href="http://web-students.pstcc.edu/web2603ww1/jcforrester/project14/homepage.php">Contact</a></li>
        <liclass="active"><a href="http://web-students.pstcc.edu/web2603ww1/jcforrester/project14/madlib.php">Mad Lib</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="http://web-students.pstcc.edu/web2603ww1/jcforrester/index.html">Back to Main <i class="fa fa-home" aria-hidden="true"></i></a></li>
      </ul>
    </div>
  </div>
 </nav>

<div class = "container">
	<div class = "libs">

    <h1>"Letter from Camp"</h1>

Dear <?php echo $_POST["relative"]; ?>,<br>
I am having a(n) <?php echo $_POST["adj1"]; ?> time at camp. The counselour is <?php echo $_POST["adj2"]; ?> and the food is <?php echo $_POST["adj3"]; ?>. I met <?php echo $_POST["person"]; ?> and we became <?php echo $_POST["adj4"]; ?> friends. 
Unfortunately, <?php echo $_POST["person"]; ?> is <?php echo $_POST["adj5"]; ?> and I <?php echo $_POST["verbed"]; ?> my <?php echo $_POST["body"]; ?> so we couldn`t go <?php echo $_POST["verbing"]; ?> like everybody else. I need more <?php echo $_POST["nouns"]; ?> and a <?php echo $_POST["noun"]; ?> sharpener, so please <?php echo $_POST["adverb"]; ?> <?php echo $_POST["verb"]; ?> more when you <?php echo $_POST["verb2"]; ?> back.<br>
Your <?php echo $_POST["relative2"]; ?>,<br>
<?php echo $_POST["person2"]; ?>.
 

</div>
</div>




 <script   src="https://code.jquery.com/jquery-2.2.3.js"   integrity="sha256-laXWtGydpwqJ8JA+X9x2miwmaiKhn8tVmOVEigRNtP4="   crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

</body>
</html>