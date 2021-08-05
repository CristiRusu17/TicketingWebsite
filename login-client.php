<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Login Client</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		<link href="styleindex.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div class="login">
			<h1>Login Client</h1>
			<form action="login-client.php" method="POST" autocomplete="">
			<div>
				<?php
                    if(count($errors) > 0){
                        ?>
                        <div>
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                </div>
				<label for="username">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="username" placeholder="Username" id="_username" required value="<?php echo $username ?>"> 
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password" placeholder="Password" id="_password" required>
				<input type="submit" name="login_cl" value="Login">

				<div>Not a client? <a href="signup-client.php"  style="color: white">Become one here</a></div>
			</form>
		</div>
	</body>
</html>
