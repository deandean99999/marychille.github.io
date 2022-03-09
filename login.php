<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['e-mail']) && isset($_POST['password'])) {

    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }

    $uname = validate($_POST['e-mail']);
    $pass = validate($_POST['password']);

    if (empty($uname)) {
        header("Location: index.php?error=User Name is required");
        exit();
    }else if(empty($pass)){
        header("Location: index.php?error=Password is required");
        exit();
    }else{
        $sql = "SELECT * FROM regisform WHERE email='$uname' AND password='$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_array($result);
            if ($row[2] === $uname && $row[5] === $pass) {
                $_SESSION['email'] = $row[2];
                $_SESSION['name'] = $row[1];
                $_SESSION['id'] = $row[0];
                header("Location: mainwebsite.php");
                exit();
            }else{
                header("Location: index.php?error=Incorrect User name or password");
                exit();
            }
        }else{
            header("Location: index.php?error=Incorrect User name or password");
            exit();
        }
    }

}else{
    header("Location: index.php");
    exit();
}