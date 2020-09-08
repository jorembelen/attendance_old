<?php
include "connection.php";

$uuid = $_POST['uuid'];

$data =mysqli_query($conn,"Select * from employees where uuid='$uuid'");
if($result=mysqli_fetch_array($data))
{
    
    // echo $result['name'];
    echo $result['id'];
     
} else {
    echo "none";

    mysqli_close($conn);
}


?>