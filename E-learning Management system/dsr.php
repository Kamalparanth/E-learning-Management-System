<?php
include ('connection.php');

$sql="DELETE FROM sregister WHERE sname1='" .$_GET['sname1']. "'";

if(mysqli_query($conn, $sql)){

	echo '<script type="text/javascript">'; 
    echo 'alert("Student registration deleted successfully!!!");'; 
    echo 'window.location = "asrd.php";';
    echo '</script>';
}
else{
	echo '<script type="text/javascript">'; 
    echo 'alert("unable to delete registration!!!");'; 
    echo 'window.location = "asrd.php";';
    echo '</script>';
}

?>

