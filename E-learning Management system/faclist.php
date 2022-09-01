<?php
session_start();
include ('connection.php');
?>

<!DOCTYPE html>
	
<title>Admin Dashboard</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<style>

	body,h1,h2,h3,h4,h5,h6,p{
		font-family: "Raleway", sans-serif
	}
.bgimg-1 {
  background-position: center;
  background-size: cover;
  background-image: url("s11.jpg");
  min-height: 100%;
}

.w3-bar .w3-button 
{
  padding: 10px;
}

</style>

<body>

<div class="w3-top">
  <div class="w3-bar w3-white w3-card w3-xlarge" id="myNavbar">
    <img src="logo.png" alt="Logo" width="80" height="80" style="float:left">
    <span class="w3-bar-item w3-xxlarge "> ADMIN DASHBOARD </span>
    <div class="w3-right w3-hide-small">
    	<a href="achangepswd.html" class="w3-bar-item w3-button"><i class="material-icons">published_with_changes</i> Change Password</a>
      <a href="ad.php" class="w3-bar-item w3-button"><i class="material-icons">reply</i>Back to Dashboard</a>
      <a href="homepage.html" class="w3-bar-item w3-button"><i class="material-icons">logout</i> Logout</a>
    </div>
</div>	

<div class="w3-sidebar w3-dark-grey w3-bar-block w3-xlarge" style="width:15%">
	  <a href="homepage.html" class="w3-bar-item w3-button"><i class="material-icons">home</i> Home</a>
	  <a href="adminprofile.php" class="w3-bar-item w3-button"><i class="material-icons">person</i> Profile</a>
    <a href="ad.php" class="w3-bar-item w3-button"><i class="material-icons">person</i> Student list</a>
    <a href="faclist.php" class="w3-bar-item w3-button w3-blue"><i class="material-icons">group</i> faculty list</a>
    <a href="manage_courses.php"class="w3-bar-item w3-button"><i class="material-icons">book</i> Manage Courses</a>
    <a href="map_faculty_course.php"class="w3-bar-item w3-button"><i class="material-icons">person</i> Map faculty to courses</a>
    <a href="map_student_course.php"class="w3-bar-item w3-button"><i class="material-icons">group</i> Map Student to course</a>
    <a href="asrd.php" class="w3-bar-item w3-button" ><i class="material-icons">app_registration</i> Student Registration</a>
    <a href="afrd.php" class="w3-bar-item w3-button"><i class="material-icons">app_registration</i> Faculty Registration</a>
    <a href="aard.php" class="w3-bar-item w3-button"><i class="material-icons">app_registration</i> Admin Registration</a>
    
</div>
  <br>
  <br>
  <div class="w3-container">
    <table class="w3-table-all w3-card-4 " style="width: 75%; margin-left: 250px">
      <tr class="w3-blue">
        <th>Faculty ID</th>
        <th>Faculty Name</th>
        <th>Email address</th>
      </tr>
      <?php
          include ('connection.php');             
          $record="SELECT * FROM fprofile";
          $x= (mysqli_query($conn, $record));
          while ($row= mysqli_fetch_array($x)) 
          {
      ?>
      <tbody>
        <tr>
                      <td><?php echo $row['fid']; ?></td>
                      <td><?php echo $row['facname']; ?></td>
                      <td><?php echo $row['email']; ?></td>
                        
                        
                    </tr>
                  </tbody>
                  <?php
                    }
                  ?>
      </table>
  </div>

<br>
<br>

</body>