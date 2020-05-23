<?php

$con=new mysqli("localhost","root","","student_management_system");
$output = '';

if(isset($_POST["export_excel"])){

    $sql = "SELECT * FROM std_details";
    $result = mysqli_query($con, $sql);

    if(mysqli_num_rows($result)>0){
        $output .= '
            <table class=table bordered="1">
                <tr>
                    <th>Academic Year</th>
                    <th>Registration Number</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                </tr>
        ';

        while($row = mysqli_fetch_array($result)){
            $output .= '
                <tr>
                    <td>'.$row["academic_year"].'</td>
                    <td>'.$row["reg_number"].'</td>
                    <td>'.$row["first_name"].'</td>
                    <td>'.$row["last_name"].'</td>
                </tr>
                
            ';
        }

        $output .='</table>';
        header("Content-Type: application/xls");
        header("Content-Disposition:attachment; filename=downlaod.xls");
        echo $output;

    }
    
}



?>