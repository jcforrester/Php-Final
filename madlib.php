<!DOCTYPE html>
<html lang = "en">
<head>
	<title>PHP Final</title>
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
        <li><a href="http://web-students.pstcc.edu/web2603ww1/jcforrester/project14/contact.php">Contact</a></li>
        <li class="active"><a href="http://web-students.pstcc.edu/web2603ww1/jcforrester/project14/madlib.php">Mad Lib</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="http://web-students.pstcc.edu/web2603ww1/jcforrester/index.html">Back to Main <i class="fa fa-home" aria-hidden="true"></i></a></li>
      </ul>
    </div>
  </div>
 </nav>

<div class = "container">
<div class = "center">
<h1>Mad Libs!</h1>
<h3>Fill out the form below for some "mad" fun!</h3>
  <form action="madlib_processed.php" method="post">

<div class="row">
  <div class="col-xs-2">
    <label for="relative">Relative (family member): 
    <input type="text" class="form-control" id = "relative" name = "relative" required autocomplete="off">
  </div>
</div>

<div class="row">
  <div class="col-xs-2">
    <label for="adj1">Adjective: 
    <input type="text" class="form-control" id = "adj1"  name = "adj1" required autocomplete="off">
  </div>
</div>

<div class="row">
  <div class="col-xs-2">
    <label for="adj2">Adjective: 
    <input type="text" class="form-control" id = "adj2" name = "adj2" required autocomplete="off">
  </div>
</div>

<div class="row">
  <div class="col-xs-2">
    <label for="adj3">Adjective: 
    <input type="text" class="form-control" id = "adj3" name = "adj3" required autocomplete="off">
  </div>
</div>

<div class="row">
  <div class="col-xs-2">
    <label for="person">Name of person in room: 
    <input type="text" class="form-control" id = "person" name = "person" required autocomplete="off">
  </div>
</div>

<div class="row">
  <div class="col-xs-2">
    <label for="adj4">Adjective: 
    <input type="text" class="form-control" id = "adj4"  name = "adj4" required autocomplete="off">
  </div>
</div>

<div class="row">
  <div class="col-xs-2">
    <label for="adj5">Adjective: 
    <input type="text" class="form-control" id = "adj5" name = "adj5" required autocomplete="off">
  </div>
</div>

<div class="row">
  <div class="col-xs-2">
    <label for="verbed">Verb ending in -ed: 
    <input type="text" class="form-control" id = "verbed" name = "verbed" required autocomplete="off">
  </div>
</div>

<div class="row">
  <div class="col-xs-2">
    <label for="body">Body part: 
    <input type="text" class="form-control" id = "body" name = "body" required autocomplete="off">
  </div>
</div>

<div class="row">
  <div class="col-xs-2">
    <label for="verbing">Verb ending in -ing: 
    <input type="text" class="form-control" id = "verbing" name = "verbing" required autocomplete="off">
  </div>
</div>

<div class="row">
  <div class="col-xs-2">
    <label for="nouns">Noun (plural): 
    <input type="text" class="form-control" id = "nouns" name = "nouns" required autocomplete="off">
  </div>
</div>

<div class="row">
  <div class="col-xs-2">
    <label for="noun">Noun: 
    <input type="text" class="form-control" id = "noun" name = "noun" required autocomplete="off">
  </div>
</div>

<div class="row">
  <div class="col-xs-2">
    <label for="adverb">Adverb: 
    <input type="text" class="form-control" id = "adverb" name = "adverb" required autocomplete="off">
  </div>
</div>

<div class="row">
  <div class="col-xs-2">
    <label for="verb">Verb: 
    <input type="text" class="form-control" id = "verb" name = "verb" required autocomplete="off">
  </div>
</div>

<div class="row">
  <div class="col-xs-2">
    <label for="verb2">Verb: 
    <input type="text" class="form-control" id = "verb2" name = "verb2" required autocomplete="off">
  </div>
</div>

<div class="row">
  <div class="col-xs-2">
    <label for="relative2">Relative: 
    <input type="text" class="form-control" id = "relative2" name = "relative2" required autocomplete="off">
  </div>
</div>

<div class="row">
  <div class="col-xs-2">
    <label for="person2">Person in room: 
    <input type="text" class="form-control" id = "person2" name = "person2" required autocomplete="off">
  </div>
</div>


  <button type="submit" class="btn btn-primary">Go Mad!</button>

</form>
</div>
</div>




 <script   src="https://code.jquery.com/jquery-2.2.3.js"   integrity="sha256-laXWtGydpwqJ8JA+X9x2miwmaiKhn8tVmOVEigRNtP4="   crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

</body>
</html>