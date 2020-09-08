<?php
include "connection.php";


$user_name = $_POST['user_name'];
$access_code = $_POST['access_code'];


$sql = mysqli_query($conn, "SELECT * FROM app_users WHERE user_name='$user_name' AND access_code = '$access_code' ");


$row=mysqli_num_rows($sql);
if($row >0) {
    echo "Success!";
}else{
    echo "Failed";
}

mysqli_close($conn);

?>