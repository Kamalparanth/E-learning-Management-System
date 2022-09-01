<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include ('connection.php');


if(isset($_POST['submit']))
{
$sacid=$_POST['sacid'];
$courseid=$_POST['courseid'];
$coursename=$_POST['coursename'];


$SELECT = "SELECT sid,cid From scourses Where sid = ? AND cid =?";
$SELECT1 = "SELECT fid From fcourses Where cid =? limit 1";
$INSERT = "INSERT Into scourses (cid ,sid,fid, cname)values(?,?,?,?)";
$UPDATE = "UPDATE sprofile SET courses = courses + 1 where sid= '$sacid'";
    
$stmt = $conn->prepare($SELECT);
$stmt->bind_param("ss", $sacid,$courseid);
$stmt->execute();
$stmt->bind_result($sacid,$courseid);
$stmt->store_result();
$rnum = $stmt->num_rows;

if ($rnum==0) 
{
  $stmt->close();

  $stmt = $conn->prepare($SELECT1);
  $stmt->bind_param("s",$courseid);
  $stmt->execute();
  $result = $stmt->get_result();
  

  if($result->num_rows != 0)
  {

  $fid = $result->fetch_assoc();
  $facid=implode("",$fid);
  $stmt1 = $conn->prepare($INSERT);
  $stmt1->bind_param("ssss", $courseid, $sacid,$facid,$coursename);
  $stmt1->execute();
  $stmt->close();
  $stmt1->close();
  echo '<script type="text/javascript">'; 
  echo 'alert("Mapping successful!!!");'; 
  echo 'window.location = "map_student_course.php";';
  echo '</script>';
  $stmt = $conn->prepare($UPDATE);
  $stmt->execute();

  }
  else
  {
    echo '<script type="text/javascript">'; 
    echo 'alert("Faculty not mapped!!!");'; 
    echo 'window.location = "map_student_course.php";';
    echo '</script>';
  }
}
else 
{
    echo '<script type="text/javascript">'; 
    echo 'alert("course already mapped!!!");'; 
    echo 'window.location = "map_student_course.php";';
    echo '</script>';
}

}
?>