<?php
include ('connection.php');

$sql="DELETE FROM fregister WHERE fname1='" .$_GET['fname1']. "'";

if(mysqli_query($conn, $sql)){

	echo '<script type="text/javascript">'; 
    echo 'alert("Student registration deleted successfully!!!");'; 
    echo 'window.location = "afrd.php";';
    echo '</script>';
}
else{


	echo '<script type="text/javascript">'; 
    echo 'alert("unable to delete registration!!!");'; 
    echo 'window.location = "afrd.php";';
    echo '</script>';
}

?>

