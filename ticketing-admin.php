<?php require_once "controllerUserData.php"; ?>
<?php 
$username = $_SESSION['username'];
if($username != false){
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $name = $fetch_info['name'];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<title>Admin Ticketing</title>
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
    background-image:url("logo.jpg");
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

 
 
<div class="crs-content" style="max-width:2000px;max-height:1080px;margin-top:46px">

  <div class="crs-container crs-content crs-padding-64" style="max-width:1800px" id="contact">
    <h2 class="crs-wide crs-center">CREATED TICKETS</h2>
    <div class="crs-row crs-padding-32 transp">
      <div>
      <table>
       <tr>
          <th>Id</th>
          <th>Client</th>
          <th>Client Message</th>
          <th>Department</th>
          <th>Severity</th>
          <th>Status</th>
        </tr>
        <?php
          require "connection.php";
          $sql = "SELECT * FROM ticketing ";
          $result = mysqli_query($con, $sql);
          if ($result->num_rows > 0) {   
            while($row = $result->fetch_assoc()) {
              echo "<tr><td>" . $row["id"]. "</td><td>" . $row["client"]. "</td><td>". $row["mesaj"] . "</td><td>". $row["department"]. "</td><td>". $row["severity"]. "</td><td>". $row["status"]. "</td></tr>";
            }
          }
        ?>
      </table>
      </div>
    </div>
  </div>
  <div class="crs-container crs-content crs-padding-64 " style="max-width:1400px" id="contact">
      <br><h2 class="crs-wide crs-center">MANAGE TICKETS</h2>
      <form action="ticketing-admin.php" method="POST" autocomplete="">
          <div class="crs-row-padding" style="margin:0 -16px 8px -16px">
            <div class="crs-half">
              <label for="username">
                <p>Ticket ID</p>
              </label>
              <input class="crs-input crs-border" type="number" name="ticket_id" placeholder="Ticket ID" >
            </div>
            <div class="crs-half">
            <label for="department">
                <p>Department (Vanzari/Marketing/IT Support)</p>
            </label>
            <input class="crs-input crs-border" type="text" name="department" placeholder="Department" required name="Department">
            </div>
            <div class="crs-half">
              <label for="status">
                <p>Status</p>
          </label>
          <input class="crs-input crs-border" type="text" name="status" placeholder="Status" required name="Status">
            </div>
          </div>
          <label for="message">
                <p>Message</p>
          </label>
          <input class="crs-input crs-border" type="text" name="message" placeholder="Message" required name="Message">
          <button class="crs-button crs-black crs-section crs-center" type="submit" name="ticketing_admin" value="TICKET">UPDATE TICKET</button>
        </form>
    </div>
  </div>
  <div class="crs-container crs-content crs-padding-64 " style="max-width:1400px" id="contact">
    <br><h3 class="crs-wide crs-center">DELETE TICKET</h3>
    <form action="ticketing-admin.php" method="POST" autocomplete="">
          <div class="crs-row-padding" style="margin:0 -16px 8px -16px">
            <div class="crs-half">
              <label for="ticket_id">
                <p>Ticket ID</p>
              </label>
              <input class="crs-input crs-border" type="number" name="ticket_id" placeholder="Ticket ID" >
            </div>
          </div>
            <button class="crs-button crs-black crs-section crs-center" type="submit" name="ticketing_admin_delte" value="TICKET_DELETE">DELETE TICKET</button>
          </div>
      </form>
  </div>
  

</div>
</body>
</html>