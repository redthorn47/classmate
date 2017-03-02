<?php  

include 'config.php';

function authentication(){
	$username = mysql_real_escape_string($_POST['username']);
	$password = mysql_real_escape_string($_POST['password']);
	$query = mysql_query("select * from user where username = '".$username."' AND password = '".$password."'");
	if (!$query) {
		//check query
		return mysql_error();
	}else{
		//authenticating user
		if (mysql_num_rows($query) == 1) {
			create_user_session($query);
			return 1;
		}else{ return 0; }
	}
}

function create_user_session($query){
	while($udata = mysql_fetch_array($query)){
		$_SESSION['id'] = $udata['id'];
		$_SESSION['username'] = $udata['username'];
		$_SESSION['password'] = $udata['password'];
		$_SESSION['email'] = $udata['email'];
		$_SESSION['phone'] = $udata['phone'];
		$_SESSION['fullname'] = $udata['fullname'];
		$_SESSION['birthday'] = $udata['birthday'];
		$_SESSION['title'] = $udata['title'];
		$_SESSION['registered'] = $udata['registered'];
	}

}



?>