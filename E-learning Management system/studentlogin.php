<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
if(isset($_SESSION))
{
SESSION_DESTROY();
}
session_start();

$sname = $_POST['sname'];
$spswd = $_POST['spswd'];

if (!empty($sname) && !empty($spswd))
{
  $host = "localhost";
  $dbusername = "root";
  $dbpassword = "";
  $dbname = "explorelms";

  $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
  if (mysqli_connect_error())
  {
  die('Connect Error ('. mysqli_connect_errno() .') '. mysqli_connect_error());
  }
  else
  {
  	$query = "SELECT * FROM slogin WHERE sname = '". mysqli_real_escape_string($conn,$sname) ."' AND spswd = '". mysqli_real_escape_string($conn,$spswd) ."'" ;
    $result = mysqli_query($conn,$query);

    if (mysqli_num_rows($result) == 1) 
    {
      $_SESSION['username']=$sname;
      header("location: ./sd.php");
    } 
    else 
    {
      echo '<script type="text/javascript">'; 
      echo 'alert("Invalid login! Check username and password!! Try again!!!");'; 
      echo 'window.location = "studentlogin.html";';
      echo '</script>';
    }
  } 
}

else 
{
 echo "All field are required";
 die();
}