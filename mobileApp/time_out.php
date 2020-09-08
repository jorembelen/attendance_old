<?php
include "connection.php";
$emp_id = $_POST['emp_id'];
$time_out = $_POST['time_out'];
$out_date = $_POST['out_date'];
$app_user = $_POST['app_user'];

$data = mysqli_query($conn, "SELECT * FROM employees WHERE id = '$emp_id'");

$result=mysqli_fetch_array($data);

if($result>0) {
   if($time_out <= $result['checkOut_time']) 
   {
       $status=0;
   }else{
    $status=1;
   }

$sql = mysqli_query($conn, "SELECT * FROM attendances WHERE emp_id = '$emp_id' AND in_date = '$out_date'");

$row=mysqli_num_rows($sql);
if($row >0) {

    $sql = mysqli_query($conn, "SELECT * FROM attendances WHERE emp_id = '$emp_id' AND out_date = '$out_date'");

    $row=mysqli_num_rows($sql);
    if($row >0) {

        echo "Duplicated Punch!";
        
    }else{

    $input = mysqli_query($conn, "UPDATE attendances SET time_out = '$time_out', out_date = '$out_date', app_user = '$app_user', out_status = '$status' WHERE emp_id = '$emp_id' AND in_date = '$out_date' ");
    
    $data =mysqli_query($conn,"Select * from employees where id='$emp_id'");
    if($result=mysqli_fetch_array($data))
    {

    echo $result['name'];

    }

    }
}else{

    echo "You need to login first!";

    }

    mysqli_close($conn);

    }

?>