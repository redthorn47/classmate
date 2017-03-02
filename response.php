<?php  

include 'incl/header.php';

// ------- Catch Package ------- //

if(!empty($_POST['username']) && !empty($_POST['password'])){
	if (authentication() == 1) {
		header("location:home.php");
	}
}

?>