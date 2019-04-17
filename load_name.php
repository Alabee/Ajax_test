<?php
	include 'db_connect.php';

    //$selected_reg = $_POST['reg_selected'];

    $selected_reg = "CT202/0045/16";

    $sql = "SELECT reg_no, student_name FROM personal_infos";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0){
        while ($row = mysqli_fetch_assoc($result)) {
            # code
            if($row['reg_no'] == $selected_reg){
                echo "Registration number: " . $row['reg_no'];
                echo "<br>"; 
                echo "Student name: " . $row['student_name'];         
            }

        }
    }else{
        echo "No results";
    }
?>

