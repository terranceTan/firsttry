<?php
/*
 * Template name: Custom Login Page
*/

//get_header();

global $user_ID, $wpdb;

if(!$user_ID){

	if($_POST){
		$user_login = $wpdb->escape($_POST['user_login']);
		$user_pass = $wpdb->escape($_POST['user_pass']);

		$login_array = array();
		$login_array['user_login'] = $user_login;
		$login_array['user_pass'] = $user_pass;

		//provide the automation property to all these credentials form the database user
		$verify_user = wp_signon($login_arrray, true);
		//check the offset the past object into this function is an error object or not
		if(!is_wp_error($verify_user)){
				echo "<script> window.location = '".site_url()."'</script>";
			
		}else{
			//echo "<p>Invalid Credentials</p>";}
			echo 'Custom Login Page fail to login. Goto <a href="' . get_site_url() . '/wp-login.php">login page</a>.';}
	}else{
	// user in logged out state
 		get_header(); ?>

		<form method="post">
			<div>
				<label for="username">Username <strong>*</strong></label>
				<input type="text" id="user_login" name="username" placeholder="Enter Username"/>
			</div>

			<div>
				<label for="password">Password <strong>*</strong></label>
				<input type="password" id="user_pass" name="password" placeholder="Enter Password"/>
			</div>
			<input type="submit" name="submit" value="Login"/>
			</form>

			<?php get_footer();
		}
}else{
	//user is logged in
}
?>
