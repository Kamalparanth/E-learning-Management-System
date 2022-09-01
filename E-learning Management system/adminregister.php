<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$aname1 = $_POST['aname1'];
$adminname = $_POST['adminname'];
$aemail = $_POST['aemail'];
$apswd1 = $_POST['apswd1'];
$apswd2 = $_POST['apswd2'];

if (!empty($aname1) || !empty($adminname) || !empty($aemail) || !empty($apswd1) || !empty($apswd2) )
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
    if($apswd1 != $apswd2) 
    {
     echo '<script type="text/javascript">'; 
     echo 'alert("Password and re-enter Password Does not match!!!");'; 
     echo 'window.location = "studentregister.html";';
     echo '</script>';
    }
    else
    {

    $SELECT = "SELECT aemail From aregister where aemail = ? Limit 1";
    $INSERT = "INSERT Into aregister(aname1 , adminname, aemail ,apswd1)values(?,?,?,?)";
    
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $aemail);
     $stmt->execute();
     $stmt->bind_result($aemail);
     $stmt->store_result();
     $rnum = $stmt->num_rows;

    if ($rnum==0) 
    {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssss", $aname1,$adminname, $aemail, $apswd1);
      $stmt->execute();
      echo '<script type="text/javascript">'; 
      echo 'alert("Registration Successful!  wait for verification! Try logging in after 24 hours!!!");'; 
      echo 'window.location = "adminlogin.html";';
      echo '</script>';
      $stmt->close();
    }
    else 
    {
      echo "Someone already register using this email";
    }
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