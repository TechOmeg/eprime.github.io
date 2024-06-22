<?php 
session_start();
include_once "include/connection.php";
if(isset($_POST['register'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass  = $_POST['pass'];
    $repass = $_POST['repass'];
     
    if($name != "" && $email != "" && $pass != "" && $repass != ""){

      $insert = mysqli_query($connect,"INSERT INTO `register_info`(`Full_Name`, `Email`, `Password`, `Re_Password`, `Modify`) VALUES ('$name','$email','$pass','$repass',NOW())");
      unset($_SESSION["error"]);
      $_SESSION["sucess"] = "Registration Sucessfully";
      header("Location:login.php");

    }else{
        unset($_SESSION["sucess"]);
        $_SESSION["error"] = "Fill All Feilds";
        header("Location:register.php");
    }
}else{
    unset($_SESSION["sucess"]);
    $_SESSION["error"] = "Fill All Feilds";
    header("Location:register.php");
}
?>