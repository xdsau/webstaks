<?php
    session_start();
    echo "Hello admin ".$_SESSION['username']."<br>";
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, 'web2018');
    $sql = "SELECT * FROM C11_car";
    $result = mysqli_query($conn,$sql);
    $num = mysqli_num_rows($result);
    
    
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .card{
            border: 2px solid black;
            height: auto;
            width: auto;
        }
        .cards{
            width: 260px;
        }
        .img_car{
            width: 250px;
            height: 170px;
        }
    </style>
</head>
<body>
    <?php
        if ($num>0){
            $row = mysqli_fetch_assoc($result);
            echo $num;
            echo "<div class = 'cards'>";
            for($i = 0; $num > $i;$i++){
                $url = $row['url'];
                $id = $row['id'];
                echo "<div class = 'card'>
                        <img src = '$url' class = 'img_car'>
                        <form action = 'delete.php' method = 'post'>
                            <input type = 'text' hidden = 'hidden' name = 'id' value = '$id'>
                            <input type = 'submit'  value = 'Remove'>
                        </form>
                    </div>";
            }
            echo "</div>";
        }
        else{
            echo "No cars yet";
        }
    ?>
    
</body>
</html>