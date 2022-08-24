<?php
include ("../View/header.php");


?>


<html>

<head>
<script>
function validateForm() {
  let x = document.forms["login"]["username"].value;
  if (x == "") {
    alert("Username must be filled out");
    return false;
  }
}

function validateForm1() {
  let y = document.forms["login"]["password"].value;
  if (y == "") {
    alert("Password must be filled out");
    return false;
  }
}


</script>

</head>


<body>

<div class='main-body'>
    

 <form name='login' class='bus-login-form' action="../Controller/buslogincheck.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm(), validateForm1()">
            <p class='form-title'> Sign In  </p> <hr>
            
            <div class='form-fields'>

                <div class='form-field'>
                    <label> Username : </label>
                    <input type = "text" name= "username" > 
                </div>
                
                <div class='form-field'>
                    <label> Password : </label>
                    <input type = "password" name= "password" >  
                </div>
            </div>

        <div class='form-btns'> 
            <input type="submit" value="Login" name="submit" class='submit-btn'> 
            <input type="reset" value="Reset" class='reset-btn'>  
        </div>
        <p class='form-reg-link'>
             <a href="../View/busregistration.php"> Create Your Bus Comapany Employee Account </a> 
        </p> 
    </form>




</div>
</body>
</html>

<?php
include ("../View/footer.php");
?>
