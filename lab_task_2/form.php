<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $degreeErr = $dobErr = $bloodErr = "";
$name = $email = $gender = $degree = $dateofbirth = $bloodgroup = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = $_POST["name"];
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = $_POST["email"];
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  if(empty($_POST["dateofbirth"])) {
      $dobErr = "DOB is required";
  } else {
      $dateofbirth = $_POST["dateofbirth"];
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = $_POST["gender"];
  }

  if (empty($_POST["degree"])) {
    $degreeErr = "Degree is required";
  } else {
    $degree = $_POST["degree"];
  }

  if (empty($_POST["bloodgroup"])) {
    $bloodErr = "Blood group is required";
  } else {
    $bloodgroup = $_POST["bloodgroup"];
  }
}

?>

<h2>PHP Form Validation</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  <h3>Name:</h3> <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  <h3>E-mail:</h3> <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
 <h3> Date of Birth:</h3>
  <input type="date" id="dateofbirth" name="dateofbirth">
  <br><br>
  <h3>Gender:</h3>
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="Female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="Male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="Other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <h3>Degree:</h3>
  <input type="checkbox" name="degree" <?php if (isset($degree) && $degree=="ssc") echo "checked";?> value="SSC">SSC
  <input type="checkbox" name="degree" <?php if (isset($degree) && $degree=="hsc") echo "checked";?> value="HSC">HSC
  <input type="checkbox" name="degree" <?php if (isset($degree) && $degree=="bsc") echo "checked";?> value="BSc">BSc
  <input type="checkbox" name="degree" <?php if (isset($degree) && $degree=="msc") echo "checked";?> value="MSc">MSc 
  <span class="error">* <?php echo $degreeErr;?></span>
  <br><br>
 <h3> Blood Group:</h3>
  <select id="bloodgroup" name="bloodgroup">
      <option value="A+"> A+ </option>
      <option value="A-"> A- </option>
      <option value="B+"> B+ </option>
      <option value="B-"> B- </option>
      <option value="AB+"> AB+ </option>
      <option value="AB-"> AB- </option>
      <option value="O+"> O+ </option>
      <option value="O-"> O- </option>
</select><br><br>


  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $dateofbirth;
echo "<br>";
echo $gender;
echo "<br>";
echo $degree;
echo "<br>";
echo $bloodgroup;
echo "<br>";
?>

</body>
</html>