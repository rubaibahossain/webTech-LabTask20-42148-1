<?php  
require_once '../model/model.php';


if (isset($_POST['createProduct'])) {
	$data['name'] = $_POST['name'];
	$data['buying price'] = $_POST['buying price'];
	$data['selling price'] = $_POST['selling price'];
	
	if (isset($_POST['display'])) {
        $data['display'] = 1;
    } else {
        $data['display'] = 0;
    }


  if (addProduct($data)) {
  	echo 'Product successfully added!! <a href="../showAllProducts.php">Go Back</a> ';
  }
} else {
	echo 'You are not allowed to access this page.';
}

  

?>