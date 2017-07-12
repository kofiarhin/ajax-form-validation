<?php 
	
	include "dbh.inc.php";

	$name = $_POST['name'];
	$username= $_POST['username'];
	$password = $_POST['password'];


	$error_name = false;
	$error_username = false;
	$error_password = false;

	if(empty($name) || empty($username) || empty($password)) {


		echo 'please fill out all fields indicated in red';
	} else {

		//query database with user details;

		$sql = "INSERT INTO user (name, username, password) VALUES ('$name', '$username', '$password')";
		$result = $conn->query($sql);
		echo "form submitted";
	}

	

	if(empty($name)) {

		$error_name = true;

	}

	if(empty($username)) {

		$error_username = true;
	}



	if(empty($password)) {

		$error_password = true;
	}




	 ?>


	<script>
		
			var error_name = "<?php echo $error_name ?>";
			var error_username = "<?php echo $error_username ?>";
			var error_password = "<?php echo $error_password ?>";

			if(error_name) {

				$('#name').addClass('error');
			} else {

				$('#name').removeClass('error');
			}

			if (error_username) {

				$('#username').addClass('error');
			} else {
				$('#username').removeClass('error');
			}

			if(error_password) {
				$('#password').addClass('error');

			} else {

				$('#password').removeClass('error');
			}


			if( error_name == false && error_username == false && error_password == false) {

				$('#name, #username, #password').addClass('success');
				$('#name, #username, #password').val('');
			} else {

				$('#name, #username, #password').removeClass('success');
			}
	</script>