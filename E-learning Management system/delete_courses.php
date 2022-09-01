<?php
include ('connection.php');

$sql="DELETE FROM courses WHERE cid='" .$_GET['cid']. "'";

if(mysqli_query($conn, $sql)){

	echo '<script type="text/javascript">'; 
    echo 'alert("Course deleted successfully!!!");'; 
    echo 'window.location = "manage_courses.php";';
    echo '</script>';
}
else{


	echo '<script type="text/javascript">'; 
    echo 'alert("Course Not found!!!");'; 
    echo 'window.location = "manage_courses.php";';
    echo '</script>';
}

?>

