<?php
class DB
{
    
function opencon(){
$DBHostname="localhost";
$DBUsername="root";
$DBPass="1234";
$DBName="otbs_2";

$conn=new mysqli($DBHostname, $DBUsername, $DBPass, $DBName);
if($conn->connect_error)
{
    echo "Unable to create connection object".$conn->connect_error;
}
return $conn;
    }


function InsertData($companyname, $licensenumber, $firstname, $lastname, $username, $gender,  $lang, $email, $password, $filename, $tablename, $conn)
  {
    $sqlstr="INSERT INTO $tablename (fname, lname, email, license_number, role, uname, password, filename) values ('$firstname', ' $lastname', '$email', '$licensenumber', '$lang', '$username', '$password', '$filename')";
    if($conn->query($sqlstr)==TRUE)
    {
    echo "Data Inserted Successfully";
    }
    else{
        echo "Cant insert Data".$conn->err;
    }
  }


function searchemail($conn, $tablename, $email)
 {
    $sqlstr="Select email From $tablename WHERE email='$email'";
    $result_email=$conn->query($sqlstr);
    return $result_email;
 }

 function closecon($conn){
    $conn->close();
}

}