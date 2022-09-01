<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$sname1 = $_POST['sname1'];
$studentname = $_POST['studentname'];
$semail = $_POST['semail'];
$spswd1 = $_POST['spswd1'];
$spswd2 = $_POST['spswd2'];

if (!empty($sname1) || !empty($studentname) || !empty($semail) || !empty($spswd1) ||  !empty($spswd2) )
{

  $host = "localhost";
  $dbusername = "root";
  $dbpassword = "";
  $dbname = "explorelms";

  $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

  if (mysqli_connect_error())
  {
  die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
  }
  else
  {
    if($spswd1 != $spswd2) 
    {
     echo '<script type="text/javascript">'; 
     echo 'alert("Password and re-enter Password Does not match!!!");'; 
     echo 'window.location = "studentregister.html";';
     echo '</script>';
    }
    else
    {

    $SELECT = "SELECT semail From sregister Where semail = ? Limit 1";
    $INSERT = "INSERT Into sregister (sname1 ,studentname, semail ,spswd1)values(?,?,?,?)";
    
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $semail);
     $stmt->execute();
     $stmt->bind_result($semail);
     $stmt->store_result();
     $rnum = $stmt->num_rows;

    if ($rnum==0) 
    {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssss", $sname1, $studentname,$semail, $spswd1);
      $stmt->execute();
      echo '<script type="text/javascript">'; 
      echo 'alert("Registration Successful!  wait for verification! Try logging in after 24 hours!!! ");'; 
      echo 'window.location = "studentlogin.html";';
      echo '</script>';
    }
    else 
    {
      echo '<script type="text/javascript">'; 
      echo 'alert("Email address exists");'; 
      echo 'window.location = "studentregister.html";';
      echo '</script>';
    }
     $stmt->close();
     $conn->close();
    }
  }
} 
else 
{
 echo "All field are required";
 die();
}

?>