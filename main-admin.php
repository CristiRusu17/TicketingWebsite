<?php require_once "controllerUserData.php"; ?>
<?php 
$username = $_SESSION['username'];
if($username != false){
    $sql = "SELECT * FROM admins WHERE username = '$username'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $name = $fetch_info['name'];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<title>Admin Main Page</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="cssf1.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif}
/* latin-ext */
</style>
<body>

<!-- Navbar -->
<div class="crs-top">
  <div class="crs-bar crs-black crs-card">
    <a href="ticketing-admin.php" class="crs-bar-item crs-button crs-padding-large crs-hover-grey">MANAGE TICKETS</a>
    <a href="admin-contacts.php" class="crs-bar-item crs-button crs-padding-large crs-hover-grey">CONTACTS</a>
    <a href="signup-admin.php" class="crs-bar-item crs-button crs-padding-large crs-hover-white">ADD ADMIN</a>
    <a href="logout-user.php" class="crs-bar-item crs-button crs-padding-large crs-hover-red crs-right">LOGOUT</a>
  </div>
</div>

 

<div class="crs-content" style="max-width:2000px;max-height:1080px;margin-top:46px">

   <div class="crs-display-container crs-center">
    <img src="logo.jpg" style="width:100%">
    <div class="crs-display-bottommiddle crs-container crs-text-white crs-padding-32 crs-hide-small">
      <?php echo(strftime("%m/%d/%Y %H:%M")); ?></p>
      <h3>WELCOME, <?php echo $name?></h3>   
    </div>
  </div>
  

</div>
</body>
</html>