<?php
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, 'web2018');
    $sql = "SELECT * FROM C11 WHERE username='$username' and password = '$password'";
    $result = mysqli_query($conn,$sql);
    $num = mysqli_num_rows($result);
    if ($num>0){
        $row = mysqli_fetch_assoc($result);
        session_start();
        $_SESSION['username'] = $row['username'];
        echo "Hello ".$row['username']."<br>".$row['admin'];
        if($row['admin'] == 0){
            header('location: task3.php');
        }
        else{
            header('location: task3_admin.php');
        }
    }
    else{
        echo "There is no such user";
    }
?>