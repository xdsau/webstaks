<?php 
    if(isset($_REQUEST['id'])){
        $id = $_REQUEST['id'];
        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = '';
        $conn = mysqli_connect($dbhost, $dbuser, $dbpass, 'web2018');
        $sql = "DELETE FROM C11_car WHERE id = $id";
        $result = mysqli_query($conn,$sql);
        
        echo "We removed it from list";
    }
    else{
        echo "GEt out";
    }
    
    
    
?>