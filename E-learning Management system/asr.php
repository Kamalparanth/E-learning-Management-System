<?php
include ('connection.php');

$sql = "INSERT INTO slogin (sname, spswd) values ('" .$_GET['sname1']. "','" .$_GET['spswd1']. "')";

if(mysqli_query($conn, $sql)){

	$rec1 = "SELECT * FROM slogin LEFT JOIN sregister ON slogin.sname = sregister.sname1 where sname1 = '" .$_GET['sname1']. "'";
	$x= (mysqli_query($conn, $rec1));
    $row= mysqli_fetch_array($x);

    $sql1 = "INSERT INTO sprofile (sid,stuname,uname,email) values ('" .$row['sid']. "','" .$_GET['studentname']. "','" .$_GET['sname1']. "','" .$_GET['semail']. "')";
    mysqli_query($conn, $sql1);

	echo '<script type="text/javascript">'; 
    echo 'alert("Student registration Added!!!");'; 
    echo 'window.location = "asrd.php";';
    echo '</script>';
}
else{


	echo '<script type="text/javascript">'; 
    echo 'alert("unable to add !!");'; 
    echo 'window.location = "asrd.php";';
    echo '</script>';
} 

mysqli_close();
?>

