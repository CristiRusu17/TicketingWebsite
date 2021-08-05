<?php require_once "controllerUserData.php"; ?>
<?php 
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<title>Admin Contacts</title>
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
    background-color: rgba(255,255,255,0.4);
    color: white;
}
</style>
<body>

<!-- Navbar -->
<div class="crs-top">
  <div class="crs-bar crs-black crs-card">
    <a href="main-admin.php" class="crs-bar-item crs-button crs-padding-large crs-hover-grey">HOME</a>
    <a href="logout-user.php" class="crs-bar-item crs-button crs-padding-large crs-hover-red crs-right">LOGOUT</a>
  </div>
</div>

 
<div class="crs-content" style="max-width:2000px;max-height:1080px;margin-top:46px;">

  <div class="crs-container crs-content crs-padding-64" style="max-width:1800px" id="contact">
    <h2 class="crs-wide crs-center">CONTACTS</h2>
    <div class="crs-row crs-padding-32 transp">
      <div>
      <table>
       <tr>
          <th>Name</th>
          <th>eMail</th>
          <th>Message</th>
        </tr>
        <?php
          require "connection.php";
          $sql = "SELECT * FROM contact ";
          $result = mysqli_query($con, $sql);
          if (1) {   
            while($row = $result->fetch_assoc()) {
              echo "<tr><td>" . $row["name"]. "</td><td>" . $row["email"]. "</td><td>". $row["message"] . "</td></tr>";
            }
          }
        ?>
      </table>
      </div>
    </div>
  </div>

  
</div>
</body>
</html>