<?php require_once "controllerUserData.php"; ?>
<?php 
$username = $_SESSION['username'];
if($username != false){
    $sql = "SELECT name FROM clients WHERE username = '$username'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $name = $fetch_info['name'];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<title>Client Ticketing</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="cssf1.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif}
/* latin-ext */
table {
border-collapse: collapse;
width: 100%;
color: black;
font-family: "Lato", sans-serif;
font-size: 17px;
text-align: left;
}
th {
background-color: grey;
color: white;
}

body {
    background-image:url("bg.jpg");
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
}
.transp {
    background-color: rgba(255,255,255,0.8);
    color: black;
}
</style>
<body>

<!-- Navbar -->
<div class="crs-top">
  <div class="crs-bar crs-black crs-card">
    <a href="main-client.php" class="crs-bar-item crs-button crs-padding-large crs-hover-grey">HOME</a>
    <a href="logout-user.php" class="crs-bar-item crs-button crs-padding-large crs-hover-red crs-right">LOGOUT</a>
  </div>
</div>

<div class="crs-content" style="max-width:2000px;max-height:1080px;margin-top:46px">
  
  <div class="crs-container crs-content crs-padding-64" style="max-width:1800px" id="contact">
    <h2 class="crs-wide crs-center">CREATE TICKET</h2>
    <div class="crs-row crs-padding-32">
      <div>
        <form action="ticketing-client.php" method="POST" autocomplete="">
          <div class="crs-row-padding" style="margin:0 -16px 8px -16px">
            <div class="crs-half">
              <label for="username">
                <p>Username</p>
              </label>
              <input class="crs-input crs-border" type="text" name="username" placeholder="Username" required value="<?php echo $username?>" readonly>
            </div>
            <div class="crs-half">
            <label for="department">
                <p class="transp">Department (Vanzari/Marketing/IT Support)</p>
            </label>
            <input class="crs-input crs-border" type="text" name="department" placeholder="Department" >
            </div>
            <div class="crs-half">
            <label for="severity">
                <p>Severity (low/medium/high)</p>
            </label>
              <input class="crs-input crs-border" type="text" name="severity" placeholder="Severity" >
            </div>
          </div>
          <div class="crs-half">
          <label for="mesaj">
            <p class="transp">Message</p> 
          </label>
          </div>
          <input class="crs-input crs-border" type="text" name="message" placeholder="Message" required name="Message">
          <button class="crs-button crs-black crs-section crs-right" type="submit" name="ticketing_client" value="TICKET">SEND TICKET</button>
        </form>
      </div>
    </div>
  </div>
  

</div>

</body>
</html>