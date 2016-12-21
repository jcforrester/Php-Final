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
        <li class ="active"><a href="http://web-students.pstcc.edu/web2603ww1/jcforrester/project14/contact.php">Contact</a></li>
        <li><a href="http://web-students.pstcc.edu/web2603ww1/jcforrester/project14/madlib.php">Mad Lib</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="http://web-students.pstcc.edu/web2603ww1/jcforrester/index.html">Back to Main <i class="fa fa-home" aria-hidden="true"></i></a></li>
      </ul>
    </div>
  </div>
 </nav>

<!-- ALL THE PHP -->
<?php
$nameErr = $lnameErr = $emailErr = $commentErr = "";
$name = $lname = $email = $comment = "";

//ok i wont explain each one but ill explain this one
if ($_SERVER["REQUEST_METHOD"] == "POST") { //see if this has been submitted, if the form didn't go through then this is pointless.
 if (empty($_POST["name"])) {  //check to see if name is empty
    $nameErr = "Name is required"; //display error if so
  } else {  //if its made it this far it isn't empty
    $name = test_input($_POST["name"]); //run my test_input function that helps validate the code
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) { //preg_match took a lot of research to use. basically it asks you to pass in a few chars and if those chars are there then it returns true. well I added a bang ! so its saying if there are any characters other then the ones present, return true, thus displaying the error message.
      $nameErr = "Only letters and white space allowed"; 
    }
  }

  if (empty($_POST["lname"])) {
    $lnameErr = "Last Name is required";
  } else {
    $lname = test_input($_POST["lname"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$lname)) {
      $lnameErr = "Only letters and white space allowed"; 
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }

$comment = test_input($_POST["comment"]);




}

//rather then repeat the code over and over I figured it'd be easier to call this function over and over
function test_input($data) {
  $data = trim($data);             //remove whitespace from either end bc user thinks they are funny
  $data = stripslashes($data);     //remove slashes because user is trying to comment out my form
  $data = htmlspecialchars($data); //replaces any special characters with the html versions so it can't break
  return $data;
}
?>


<!-- END PHP -->
<div class = "container">
<div class = "center">
  <h1>Contact Me</h1>
<span class = "errormsg">* Denotes a required feild</span><br><br>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

<div class="form-group">
    <label for="name">First Name</label><span class = "errormsg">*<?php echo $nameErr;?></span>
    <input type="text" class="form-control" name="name" id="name" placeholder="John">
  </div>

<div class="form-group">
    <label for="lname">Last Name</label><span class = "errormsg"> * <?php echo $lnameErr;?></span>
    <input type="text" class="form-control" name="lname" id="lname" placeholder="Doe">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label><span class = "errormsg">*<?php echo $emailErr;?></span>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="example@site.com">
    <small id="emailHelp" class="form-text text-muted">I won't sell your email address online..probably.</small>
    
  </div>
  <div class="form-group">
    <label for="comment">Leave me some feedback.</label>
    <input type = "textarea" rows="4" name = "comment" class="form-control" id="comment" placeholder="Questions? Comments? Snied Remarks?"></input>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>

</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $lname;
echo "<br>";
echo $email;
echo "<br>";
echo $comment;
echo "<br>";
?>

</div>
</div>


<script   src="https://code.jquery.com/jquery-2.2.3.js"   integrity="sha256-laXWtGydpwqJ8JA+X9x2miwmaiKhn8tVmOVEigRNtP4="   crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

</body>
</html>