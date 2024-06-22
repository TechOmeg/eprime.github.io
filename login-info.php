<?php 
session_start();
include_once "include/connection.php";
if(isset($_POST['login'])){

    $email = $_POST['email'];
    $pass  = $_POST['pass'];

    if($email != "" && $pass !=""){

        if($check = mysqli_query($connect,"SELECT * FROM `register_info` WHERE `Email` = '$email' and `Password`")){
               $data = mysqli_fetch_array($check);
               $_SESSION['id'] = $data['id'];
               $_SESSION['name'] = $data['Full_Name'];
               $_SESSION["sucess"] = "Login SucessFully";
               header("Location:User-panel.php");
            }else{
                unset($_SESSION["sucess"]);
                header("Location:login.php");
            }
        }else{
            unset($_SESSION["sucess"]);
            header("Location:login.php");
        }
    }else{
        unset($_SESSION["sucess"]);
        header("Location:login.php");
    }

?>