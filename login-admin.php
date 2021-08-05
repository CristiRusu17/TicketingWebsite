<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Login Admin</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		<link href="styleindex.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div class="login">
			<h1>Login Admin</h1>
			<form action="login-admin.php" method="POST" autocomplete="">
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
				<input type="submit" name="login_ad" value="Login">
			</form>
		</div>
	</body>
</html>
