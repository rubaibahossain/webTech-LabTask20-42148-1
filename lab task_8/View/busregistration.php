<?php
include ("../View/header.php");
include "../Controller/busregcheck.php"
?>

<html>

<head>

<script>       
function validate1() {
  let x = document.forms["login"]["companyname"].value;
  if (x == "") {
    alert("Company name must be filled out");
    return false;
  }
}


function validate2() {
  let y = document.forms["login"]["email"].value;
  if (y == "") {
    alert("Email must be filled out");
    return false;
  }
}


function validate3() {
  let a = document.forms["login"]["designation"].value;
  if (a == "") {
    alert("Name must be filled out");
    return false;
  }
}


function validate4() {
  let b = document.forms["login"]["password"].value;
  if (b == "") {
    alert("Password must be filled out");
    return false;
  }
}
function validate5() {
  let c = document.forms["login"]["licensenumber"].value;
  if (c == "") {
    alert("License number must be filled out");
    return false;
  }
}
function validate6() {
  let d = document.forms["login"]["username"].value;
  if (d == "") {
    alert("Name must be filled out");
    return false;
  }
}
function validate7() {
  let e = document.forms["login"]["myfile"].value;
  if (e == "") {
    alert("File must be filled out");
    return false;
  }
}

function validate8() {
  let d = document.forms["login"]["ck"].value;
  if (d == "") {
    alert("Access must be filled out");
    return false;
  }
}

function validate9() {
  let d = document.forms["login"]["confirmpassword"].value;
  if (d == "") {
    alert("password must be filled out");
    return false;
  }
}

function validate10() {
  let b = document.forms["login"]["gender"].value;
  if (b == "") {
    alert("Gender must be filled out");
    return false;
  }
}

function validate11() {
  let b = document.forms["login"]["firstname"].value;
  if (b == "") {
    alert("Name must be filled out");
    return false;
  }
}

function validate12() {
  let b = document.forms["login"]["lastname"].value;
  if (b == "") {
    alert("Name must be filled out");
    return false;
  }
}
</script>







</head>



<body>

<div class='main-body'>


    
    <form name="login" class='bus-reg-form' action="" method="post" enctype="multipart/form-data" onsubmit="return validate1(), validate2(),validate3(),validate4(),validate5(),validate6(),validate7(),validate8(),validate9(),validate10(),validate11(),validate12()">
    <p class='form-title'> Register Your Business Account </p> <hr>


    <div class='form-fields'>
        <div class='form-field'>
            <label> Company Name : </label>
            <input type="text" name="companyname" > 
            <p> <?php echo $cname ?> </p>
        </div>

        <div class='form-field'>
            <label> License Number : </label>
            <input type="text" name="licensenumber" > 
            <p> <?php echo $lnum ?> </p>
        </div>

        <div class='form-field select'>
            <label> Get Access As: </label>
            <input type = "checkbox" name="ck" value="Moderator"> <span>Moderator</span> 
            <input type = "checkbox" name="ck" value="Editor"> <span>Editor</span> 
            <input type = "checkbox" name="ck" value="Viewer"> <span>Viewer</span> 
            <p> <?php echo  $lang?> </p>
        </div>

        <div class='form-field'>
            <label> First Name : </label>
            <input type="text" name="firstname" >
            <p> <?php echo $fname ?> </p>
        </div>

        <div class='form-field'>
            <label> Last Name : </label>
            <input type="text" name="lastname" >
            <p> <?php echo $lname ?> </p>
        </div>


        <div class='form-field'>
            <label> User Name : </label>
            <input type="text" name="username" > 
            <p> <?php echo $uname ?> </p>
        </div> 

        <div class='form-field select'>
            <label> Gender: </label>
            <input type="radio" name="gender" value="Male" > <span>Male</span>
            <input type="radio" name="gender" value="Female" > <span>female</span> 
            <p> <?php echo $gr ?> </p>
        </div> 

        <div class='form-field select'>
            <label> Designation: </label>
            <input type="radio" name="designation" value="Owner" > <span>Owner</span> 
            <input type="radio" name="designation" value="Manager" > <span>Manager</span> 
            <input type="radio" name="designation" value="Employee" > <span>Employee</span>
            <p> <?php echo $dg ?> </p>
        </div> 

        <div class='form-field'>
            <label> Email : </label>
            <input type = "text" name= "email" > 
            <p> <?php echo $em?> </p>
        </div> 

        <div class='form-field'>
            <label> Password : </label>
            <input type = "password" name= "password" > 
            <p> <?php echo $cp ?> </p>
        </div> 

        <div class='form-field'>
            <label> Confirm Password : </label>
            <input type = "confirmpassword" name= "confirmpassword" > 
            <p> <?php echo $cp ?> </p>
        </div> 

        <div class='form-field'>
            <label> Please choose a file </label>
            <input type="file" name="myfile" >
            <p> <?php echo $fu ?> </p>
        </div>
    </div>

    <div class='form-btns'>
        <input type="submit" value="Submit" name="submit" >
        <input type="reset" value="Reset" > 
    </div>

</div>
</body>

</html>

<?php
include ("../View/footer.php");
?>
