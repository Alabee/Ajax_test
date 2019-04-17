<?php
	include 'db_connect.php';

    $reg_no = $_REQUEST['q'];

    $sql = "SELECT reg_no, student_name FROM personal_infos";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            if ($row['reg_no'] == $reg_no){
                echo $row['student_name'];
            }
        }
    }
    else{
        echo(alert("Select valid student"));
    }
?>
