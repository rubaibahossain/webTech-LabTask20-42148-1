<?php

require_once '../model/model.php';

if (isset($_POST['findUser'])) {
	
		echo $_POST['p_name'];

    try {
    	
    	$allSearchedUsers = searchUser($_POST['p_name']);
    	require_once '../showSearchedUser.php';

    } catch (Exception $ex) {
    	echo $ex->getMessage();
    }
}

