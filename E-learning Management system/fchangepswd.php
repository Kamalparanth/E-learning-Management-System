<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
include ('connection.php');
$faname=$_SESSION["facultyname"];

$uname = $_POST['uname'];
$opswd = $_POST['opswd'];
$npswd = $_POST['npswd'];
$npswd1 = $_POST['npswd1'];

if (!empty($uname) || !empty($opswd) || !empty($npswd) || !empty($nspwd1))
{

  if (mysqli_connect_error())
  {
  die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
  }
  else
  {
    if($uname == $faname)
    {
    $select="SELECT fpswd from flogin WHERE fname=? ";
	  $update1="UPDATE flogin SET fpswd= ? where fname='$uname'";

      if($npswd == $npswd1) 
      {
        $stmt = $conn->prepare($select);
        $stmt->bind_param("s",$uname);
        $stmt->execute();
        $result=$stmt->get_result();
        $pswd=$result->fetch_assoc();
        $pswd1= implode("",$pswd);
      
        if ($pswd1==$opswd) 
	      {
		        $stmt = $conn->prepare($update1);
    	      $stmt->bind_param("s",$npswd);
    	      $stmt->execute();
    	      $stmt->close();
            
            echo '<script type="text/javascript">'; 
            echo 'alert("Password Change Successful!!!");'; 
            echo 'window.location = "schangepswd.html";';
            echo '</script>';
	      }
        else 
        {   
          echo '<script type="text/javascript">'; 
          echo 'alert("Old Password Doesnot match");'; 
          echo 'window.location = "schangepswd.html";';
          echo '</script>';
        }
      }
      else
      {

      echo '<script type="text/javascript">'; 
      echo 'alert("Re-enter new password Does not match");'; 
      echo 'window.location = "schangepswd.html";';
      echo '</script>';
      }
     }
     else
    {
      echo '<script type="text/javascript">'; 
      echo 'alert("Username Does not match!");'; 
      echo 'window.location = "schangepswd.html";';
      echo '</script>';
    }
  } 
}
else 
{
      echo '<script type="text/javascript">'; 
      echo 'alert("All fields are required!!");'; 
      echo 'window.location = "fchangepswd.html";';
      echo '</script>';
 die();
}

