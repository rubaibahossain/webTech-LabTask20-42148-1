<?php  
require_once '../model/model.php';


if (isset($_POST['updateProduct'])) {
	$data['name'] = $_POST['name'];
	$data['buying price'] = $_POST['buying price'];
	$data['selling price'] = $_POST['selling price'];
	
	if (isset($_POST['display'])) {
        $data['display'] = 1;
    } else {
        $data['display'] = 0;
    }

	
  if (updateProduct($_POST['id'], $data)) {
  	echo 'Successfully updated!!';
  	//redirect to showStudent
  	header('Location: ../showProduct.php?id=' . $_POST["id"]);
  }
} else {
	echo 'You are not allowed to access this page.';
}


?>