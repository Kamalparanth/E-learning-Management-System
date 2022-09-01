<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$fname1 = $_POST['fname1'];
$facultyname = $_POST['facultyname'];
$femail = $_POST['femail'];
$fpswd1 = $_POST['fpswd1'];
$fpswd2 = $_POST['fpswd2'];

if (!empty($fname1) || !empty($facultyname) || !empty($femail) || !empty($fpswd1) || !empty($fpswd2) )
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
    if($fpswd1 != $fpswd2) 
    {
     echo '<script type="text/javascript">'; 
     echo 'alert("Password and re-enter Password Does not match!!!");'; 
     echo 'window.location = "facultyregister.html";';
     echo '</script>';
    }
    else
    {

    $SELECT = "SELECT femail FROM fregister WHERE femail = ? Limit 1";
    $INSERT = "INSERT INTO fregister (fname1 ,facultyname, femail ,fpswd1)values(?,?,?,?)";
    
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $femail);
     $stmt->execute();
     $stmt->bind_result($femail);
     $stmt->store_result();
     $rnum = $stmt->num_rows;

    if ($rnum==0) 
    {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssss", $fname1,$facultyname, $femail, $fpswd1);
      $stmt->execute();
      echo '<script type="text/javascript">'; 
      echo 'alert("Registration Successful!  wait for verification! Try logging in after 24 hours!!!");'; 
      echo 'window.location = "facultylogin.html";';
      echo '</script>';
    }
    else 
    {
      echo "Someone already register using this email";
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