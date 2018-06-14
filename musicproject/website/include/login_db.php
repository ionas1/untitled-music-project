<?php

session_start();



    if(isset($_POST['submit'])){
        include 'user_db_connect.php';

        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        //error handlers
        if (empty($username) || empty($password)){
            header("Location: ../php/login.php?login=empty");
            exit();
        } else {
            $sql = "SELECT * FROM users WHERE user_username = '$username' OR user_email='$username'";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result); //checking for users inside database
            if ($resultCheck < 1){  //if user = 0

                header("Location: ../php/login.php?login=errorr");
                exit();
            } else {
                if($row = mysqli_fetch_assoc($result)) {
                    //DEHASH password
                    $hashPasswordCheck = password_verify($password, $row['user_password']);
                    if ($hashPasswordCheck == false){
                        header("Location: ../php/login.php?login=errorrr");
                        exit();
                    } elseif ($hashPasswordCheck = true) {
                        //log in user here
                        $_SESSION['u_id'] =$row['user_id'];
                        $_SESSION['u_firstname'] =$row['user_firstname'];
                        $_SESSION['u_lastname'] =$row['user_lastname'];
                        $_SESSION['u_email'] =$row['user_email'];
                        $_SESSION['u_username'] =$row['user_username'];
                        header("Location: ../php/login.php?login=succes");
                        exit();
                    }
                }
            }
        }
    } else {
        header("Location: ../php/login.php?login=errorrrr");
        exit();
    }
?>