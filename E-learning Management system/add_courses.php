<?php
include ('connection.php');

if(isset($_POST['submit']))
{
//$course=$_POST['$course'];

$user="SELECT * FROM courses WHERE cname= '" .$_POST['course']. "'";
$query = mysqli_query($conn, $user);

  if(mysqli_num_rows($query) > 0 ) {

    echo '<script type="text/javascript">'; 
    echo 'alert("Course Name exists!");'; 
    echo 'window.location = "manage_courses.php";';
    echo '</script>';
  }
  else{

    $sql="INSERT INTO courses(`cname`) VALUES ('" .$_POST['course']. "');";

    if(mysqli_query($conn, $sql)) {
      
    echo '<script type="text/javascript">'; 
    echo 'alert("Course Added Successfully!!");'; 
    echo 'window.location = "manage_courses.php";';
    echo '</script>';
    }
    else{

    echo '<script type="text/javascript">'; 
    echo 'alert("unable to add course please try again");'; 
    echo 'window.location = "manage_courses.php";';
    echo '</script>';
    }

  }
}

?>
