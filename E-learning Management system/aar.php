<?php
include ('connection.php');

$sql = "INSERT INTO alogin (aname, apswd) values ('" .$_GET['aname1']. "','" .$_GET['apswd1']. "')";

if(mysqli_query($conn, $sql)){

	$rec1 = "SELECT * FROM alogin LEFT JOIN aregister ON alogin.aname = aregister.aname1 where aname1 = '" .$_GET['aname1']. "'";
	$x= (mysqli_query($conn, $rec1));
    $row= mysqli_fetch_array($x);

    $sql1 = "INSERT INTO aprofile (aid,adminname,aname,email) values ('" .$row['aid']. "','" .$_GET['adminname']. "','" .$_GET['aname1']. "','" .$_GET['aemail']. "')";
        
    mysqli_query($conn, $sql1);
	echo '<script type="text/javascript">'; 
    echo 'alert("Faculty registration Added!!!");'; 
    echo 'window.location = "aard.php";';
    echo '</script>';
}
else{


	echo '<script type="text/javascript">'; 
    echo 'alert("unable to add !!");'; 
    echo 'window.location = "aard.php";';
    echo '</script>';
} 

?>

