<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <?php 
        include "nav.php";

     ?>
   

 <form action="controller/createUser.php" method="POST" enctype="multipart/form-data">
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name"><br>
  <label for="buying_price">Buying Price:</label><br>
  <input type="text" id="buying_price" name="buying_price"><br>
  <label for="selling_price">Selling Price:</label><br>
  <input type="text" id="selling_price" name="selling_price"><br><br>

  <input type="checkbox" id="chk" name="display">
    <label for="chk"> Display </label>
    <br><br>

  <input type="submit" name = "createUser" value="Create">
  <input type="reset"> 
</form> 

</body>
</html>

