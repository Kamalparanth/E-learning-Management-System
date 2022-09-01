<?php
include ('connection.php');

$sql = "INSERT INTO flogin (fname, fpswd) values ('" .$_GET['fname1']. "','" .$_GET['fpswd1']. "')";

if(mysqli_query($conn, $sql)){

	$rec1 = "SELECT * FROM flogin LEFT JOIN fregister ON flogin.fname = fregister.fname1 where fname1 = '" .$_GET['fname1']. "'";
	$x= (mysqli_query($conn, $rec1));
    $row= mysqli_fetch_array($x);

    $sql1 = "INSERT INTO fprofile (fid,facname,fname,email) values ('" .$row['fid']. "','" .$_GET['facultyname']. "','" .$_GET['fname1']. "','" .$_GET['femail']. "')";
        
    mysqli_query($conn, $sql1);
	echo '<script type="text/javascript">'; 
    echo 'alert("Faculty registration Added!!!");'; 
    echo 'window.location = "afrd.php";';
    echo '</script>';
}
else{


	echo '<script type="text/javascript">'; 
    echo 'alert("unable to add !!");'; 
    echo 'window.location = "afrd.php";';
    echo '</script>';
} 

?>

