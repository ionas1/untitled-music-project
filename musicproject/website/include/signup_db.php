<?php

if (isset($_POST['submit'])) {
    include_once 'user_db_connect.php';

    $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    //check if there are empty fields
    if (empty($firstname) || empty($lastname) || empty($email) || empty($username) || empty($password)){
        header("Location: ../php/signup.php?signup=empty"); //error message ?signup=empty
        exit();
    } else {
      //check if input chars are valid 
      if (!preg_match("/^[a-z A-Z]*$/", $firstname) || !preg_match("/^[a-z A-Z]*$/", $lastname)) {
        header("Location: ../php/signup.php?signup=invalid"); //error message ?signup=invalid
        exit();
      } else {
          //check email validation
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            header("Location: ../php/signup.php?signup=invalid-email"); //error message invalid email
        exit();
        } else {
            $sql = "SELECT * FROM users WHERE user_username='$username'";
            $result = mysqli_query($conn, $sql); //run in db
            $resultCheck = mysqli_num_rows($result);

            if ($resultCheck > 0){
                header("Location: ../php/signup.php?signup=usertaken"); //user already exist
                exit();
            } else {
                //hash password
                $hashPassword = password_hash($password, PASSWORD_DEFAULT);
                //INSERT user into DB
                $sql = "INSERT INTO users (user_firstname, user_lastname, user_email, user_username, user_password) VALUES ('$firstname', '$lastname', '$email', '$username', '$hashPassword');";
                mysqli_query($conn, $sql);
                header("Location: ../php/signup.php?signup=success"); //user succesfully inserted in databse, go back to signup.php
                exit();
            }
        }
      } 
    }
} else {
    header("Location: ../php/signup.php");
    exit();
}
?>