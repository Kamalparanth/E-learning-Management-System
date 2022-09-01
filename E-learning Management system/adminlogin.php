<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
if(isset($_SESSION))
{
SESSION_DESTROY();
}
session_start();

$aname = $_POST['aname'];
$apswd = $_POST['apswd'];

if (!empty($aname) && !empty($apswd))
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
  	$query = "SELECT * FROM alogin WHERE aname = '". mysqli_real_escape_string($conn,$aname) ."' AND apswd = '". mysqli_real_escape_string($conn,$apswd) ."'" ;
    $result = mysqli_query($conn,$query);

    if (mysqli_num_rows($result) == 1) 
    {
      $_SESSION['username']=$aname;
      header("location: ./ad.php");
    } 
    else 
    {
      echo '<script type="text/javascript">'; 
      echo 'alert("Invalid login! Check username and password!! Try again!!!");'; 
      echo 'window.location = "adminlogin.html";';
      echo '</script>';
    }
  } 
}

else 
{
 echo "All field are required";
 die();
}