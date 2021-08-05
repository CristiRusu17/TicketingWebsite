<?php 
session_start();
require "connection.php";
$username = "";
$name = "";
$errors = array();



    //sign-up client
if(isset($_POST['signup-client'])){
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
    if($password !== $cpassword){
        $errors['password'] = "Confirm password not matched!";
    }
    $username_check = "SELECT * FROM clients WHERE username = '$username'";
    $res = mysqli_query($con, $username_check);
    if(mysqli_num_rows($res) > 0){
        $errors['username'] = "The username that you have entered already exists!";
    }
    $name_check = "SELECT * FROM clients WHERE name = '$name'";
    $res2 = mysqli_query($con, $name_check);
    if(mysqli_num_rows($res2) > 0){
        $errors['name'] = "You are already a client!";
    }
    if(count($errors) === 0){
        $encpass = password_hash($password, PASSWORD_BCRYPT);
        $insert_data = "INSERT INTO clients (name, username, password)
                        values('$name', '$username', '$encpass')";
        $data_check = mysqli_query($con, $insert_data);
        if($data_check){
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            header('location: main-client.php');
            exit();
        }else{
            $errors['db-error'] = "Failed while inserting data into database!";
        }
    }

}

    //sign-up admin
if(isset($_POST['signup-admin'])){
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
    if($password !== $cpassword){
        $errors['password'] = "Confirm password not matched!";
    }
    $username_check = "SELECT * FROM admins WHERE username = '$username'";
    $res = mysqli_query($con, $username_check);
    if(mysqli_num_rows($res) > 0){
        $errors['username'] = "The username that you have entered already exists!";
    }
    $name_check = "SELECT * FROM admins WHERE name = '$name'";
    $res2 = mysqli_query($con, $name_check);
    if(mysqli_num_rows($res2) > 0){
        $errors['name'] = "He is already an admin!";
    }
    if(count($errors) === 0){
        $encpass = password_hash($password, PASSWORD_BCRYPT);
        $insert_data = "INSERT INTO admins (name, username, password)
                        values('$name', '$username', '$encpass')";
        $data_check = mysqli_query($con, $insert_data);
        if($data_check){
            header('location: main-admin.php');
            exit();
        }else{
            $errors['db-error'] = "Failed while inserting data into database!";
        }
    }

}


    //login-client button
    if(isset($_POST['login_cl'])){
        $username = mysqli_real_escape_string($con, $_POST['username']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $check_name = "SELECT * FROM clients WHERE username = '$username'";
        $res = mysqli_query($con, $check_name);
        if(mysqli_num_rows($res) > 0){
            $fetch = mysqli_fetch_assoc($res);
            $fetch_pass = $fetch['password'];
            if(password_verify($password, $fetch_pass)){ 
                $_SESSION['username'] = $username;
                header('location: main-client.php');
            }else{
                $errors['username'] = "Incorrect username or password!";
            }
        }else{
            $errors['username'] = "It looks like you're not a client!";
        }
    }

    //login-admin button
    if(isset($_POST['login_ad'])){
        $username = mysqli_real_escape_string($con, $_POST['username']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $check_name = "SELECT * FROM admins WHERE username = '$username'";
        $res = mysqli_query($con, $check_name);
        if(mysqli_num_rows($res) > 0){
            $fetch = mysqli_fetch_assoc($res);
            $fetch_pass = $fetch['password'];
            if(password_verify($password, $fetch_pass)){
                $_SESSION['username'] = $username;
                header('location: main-admin.php');
            }else{
                $errors['username'] = "Incorrect username or password!";
            }
        }else{
            $errors['username'] = "It looks like you're not an admin!";
        }
    }

    //butonul de send ticket
    if(isset($_POST['ticketing_client'])){
        $client=mysqli_real_escape_string($con, $_POST['username']);
        $mesaj = mysqli_real_escape_string($con, $_POST['message']);
        $dep=mysqli_real_escape_string($con, $_POST['department']);
        $sev=mysqli_real_escape_string($con, $_POST['severity']);
        $status='open';
        $ms_ad='No message yet.';

        $insert_ticket="INSERT INTO ticketing (client, mesaj, ms_admin, department, severity, status) VALUES ('$client', '$mesaj', '$ms_ad', '$dep', '$sev', '$status')";
        $ins=mysqli_query($con, $insert_ticket);
        header('location: ticketing-client.php'); 
        exit();

    }


    //buton ticketing admin
    if(isset($_POST['ticketing_admin'])){
        $id=mysqli_real_escape_string($con, $_POST['ticket_id']);
        $dep = mysqli_real_escape_string($con, $_POST['department']);
        $mesaj = mysqli_real_escape_string($con, $_POST['message']);
        $status=mysqli_real_escape_string($con, $_POST['status']);;

        $update_ticket= "UPDATE ticketing SET department='$dep', ms_admin= '$mesaj', status='$status' WHERE id='$id'";
        $upd=mysqli_query($con, $update_ticket);
        header('location: ticketing-admin.php');    
        exit();
    }

    //buton delete ticket
    if(isset($_POST['ticketing_admin_delte'])){
        $id=mysqli_real_escape_string($con, $_POST['ticket_id']);
        
        $delete= "DELETE FROM ticketing WHERE id='$id'";
        $del=mysqli_query($con, $delete);
        header('location: ticketing-admin.php');    
        exit();
    }
    //butonul de contact
    if(isset($_POST['contact'])){
        $name = mysqli_real_escape_string($con, $_POST['name']);
        $email = mysqli_real_escape_string($con, $_POST['mail']);
        $mesaj = mysqli_real_escape_string($con, $_POST['message']);
 
        $insert_mesaj = "INSERT INTO contact (name, email, message)
                        values('$name', '$email', '$mesaj')";
        $data_check_msj = mysqli_query($con, $insert_mesaj);
        header('location: home.php');
        
    }
?>