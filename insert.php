<?php
   include "config.php";
   $acdYear = $_POST["acdYear"];
   $regNumber = $_POST["regNumber"];
   $firstName = $_POST["firstName"];
   $lastName = $_POST["lastName"];
   $dob = $_POST["dob"];
   $gender = $_POST["gender"];
   $district = $_POST["district"];
   $permAddress = $_POST["permAddress"];
   $email = $_POST["email"];
   $stdTeleNumber = $_POST["stdTeleNumber"];

   $sql = "INSERT INTO  std_details (academic_year,reg_number,first_name,last_name,dob,gender,district,perm_address,email,tele_number) 
   VALUES ('{$acdYear}','{$regNumber}','{$firstName}','{$lastName}','{$dob}','{$gender}','{$district}','{$permAddress}','{$email}','{$stdTeleNumber}')";
   
   if($con->query($sql)){
        echo "Data Saved";
   }


   //print_r($_POST); 

?>