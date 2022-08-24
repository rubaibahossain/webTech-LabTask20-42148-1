<?php 

require_once 'controller/userInfo.php';
$product = fetchProduct($_GET['id']);


 include "nav.php";



 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

 <form action="controller/update.php" method="POST" enctype="multipart/form-data">
  <label for="name">Name:</label><br>
  <input value="<?php echo $product['Name'] ?>" type="text" id="name" name="name"><br>
  <label for="buying_price">Buying Price:</label><br>
  <input value="<?php echo $product['Buying Price'] ?>" type="text" id="buying_price" name="buying_price"><br>
  <label for="selling_price">Selling Price:</label><br>
  <input value="<?php echo $product['Selling Price'] ?>" type="text" id="selling_price" name="selling_price"><br>
  
  <input type="checkbox" id="chk" name="display" <?php if ($product['display']){echo 'checked';} ?> >
     <label for="chk"> Display </label>
     <br><br>

  <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
  <input type="submit" name = "update" value="Update">
  <input type="reset"> 
</form> 

</body>
</html>

