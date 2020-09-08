<?php
include "connection.php";


$emp_id = $_POST['emp_id'];
$attendance_time = $_POST['time_in'];
$attendance_date = $_POST['in_date'];
$app_user = $_POST['app_user'];

$data = mysqli_query($conn, "SELECT * FROM employees WHERE id = '$emp_id'");

$result=mysqli_fetch_array($data);

    if($result>0) {
        if($attendance_time >= $result['checkIn_time']) 
        {
            $status=0;
        }else{
         $status=1;
        }
     
     $sql = mysqli_query($conn, "SELECT * FROM attendances WHERE emp_id = '$emp_id' AND in_date = '$attendance_date'");
     
     $row=mysqli_num_rows($sql);
     if($row >0) {
         echo "Duplicated Punch!";
     }else{
     
     
     $input = mysqli_query($conn, "insert into attendances (emp_id, time_in, in_date, app_user, in_status) values ('$emp_id', '$attendance_time', '$attendance_date', '$app_user', '$status')");

    $data =mysqli_query($conn,"Select * from employees where id='$emp_id'");
    if($result=mysqli_fetch_array($data))
    {
    
    echo $result['name'];

    }

    mysqli_close($conn);
    }
}

?>