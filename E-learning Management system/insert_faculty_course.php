<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include ('connection.php');


if(isset($_POST['submit']))
{
$facid=$_POST['facid'];
$courseid=$_POST['courseid'];
$coursename=$_POST['coursename'];


$SELECT = "SELECT fid,cid From fcourses Where fid = ? AND cid =?";
$INSERT = "INSERT Into fcourses (fid ,cid, cname)values(?,?,?)";
$UPDATE = "UPDATE fprofile SET courses = courses + 1 where fid= '$facid'";
    
$stmt = $conn->prepare($SELECT);
$stmt->bind_param("ss", $facid,$courseid);
$stmt->execute();
$stmt->bind_result($facid,$courseid);
$stmt->store_result();
$rnum = $stmt->num_rows;

if ($rnum==0) 
{
  $stmt->close();
  $stmt = $conn->prepare($INSERT);
  $stmt->bind_param("sss", $facid, $courseid,$coursename);
  $stmt->execute();
  echo '<script type="text/javascript">'; 
  echo 'alert("Mapping successful!!!");'; 
  echo 'window.location = "map_faculty_course.php";';
  echo '</script>';
  $stmt->close();
  $stmt = $conn->prepare($UPDATE);
  $stmt->execute();
  

}
else 
{
  echo '<script type="text/javascript">'; 
  echo 'alert("course already mapped!!!");'; 
  echo 'window.location = "map_faculty_course.php";';
  echo '</script>';
}


}
?>