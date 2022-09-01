<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if(isset($_SESSION))
{
SESSION_DESTROY();
}

session_start();


$fname = $_POST['fname'];
$fpswd = $_POST['fpswd'];

if (!empty($fname) && !empty($fpswd) )
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
  	$query = "SELECT * FROM flogin WHERE fname = '". mysqli_real_escape_string($conn,$fname) ."' AND fpswd = '". mysqli_real_escape_string($conn,$fpswd) ."'" ;
    $result = mysqli_query($conn,$query);
    
    if (mysqli_num_rows($result) == 1) 
    {
      
      $_SESSION['facultyname']=$fname;
      header("location: ./fd.php");
    } 
    else 
    {
      echo '<script type="text/javascript">'; 
      echo 'alert("Invalid login! Check username and password!! Try again!!!");'; 
      echo 'window.location = "facultylogin.html";';
      echo '</script>';
    }
  } 
}

else 
{
      echo '<script type="text/javascript">'; 
      echo 'alert("All fields are required!!!");'; 
      echo 'window.location = "facultylogin.html";';
      echo '</script>';
 die();
}