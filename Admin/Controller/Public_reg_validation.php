<?php
	session_start();

	require_once('../Model/Usermodel.php');

	if(isset($_POST['submit'])){
		
		$name = $_POST['name'];
		$email = $_POST['email'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$confirm_password = $_POST['confirm_password'];
		
		$count = UserNameQuery($username);

		if($count>0){
			?>
				<script type="text/javascript">
					alert('Username already exists ?');
				</script>
			<?php
		}else{

			$user = [
					'name'=>$name,
					'email'=> $email,
					'username'=>$_POST['username'], 
					'password'=>$password,
				];
				
			$status = insertUser($user);

			if($status){
				
				?>
					<script type="text/javascript">
						alert("Inserted data in database");
					</script>
				<?php
					header('location:../View/login.php');
				
			}else{
				?>
					<script type="text/javascript">
						alert("Not inserted data");
					</script>
				<?php
			}
		}
	}
?>