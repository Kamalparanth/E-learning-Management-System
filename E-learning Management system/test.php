<?php
include ('connection.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Faculty Course enroll</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
	<link rel="icon" type="image/jpg" href="images/icon.jpg">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Latest compiled and minified CSS  "SELECT * FROM signup INNER JOIN finance_entry ON signup.cnic=finance_entry.cnic WHERE signup.cnic='$cnic'";      -->
  <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<body>
	<!----------------------------------- Modal for Admin Add Courses --------------------------------------->
  
    <!-- Modal -->
    <!-- Modal -->
    <div class="" id="Add_Course_Modal" role="">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header" style="background: lightgrey; height: 100px;">

            <h2 class="">Map Faculty to Courses</h2>
            
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <h4 class="modal-title"></h4>
          </div>
    
    <div class="" id="Add_Course_Modal" role="">
      <div class="modal-dialog">
        <div class="modal-body" style="background: grey;">
            
            <section class="logsection">
               <div class="logform">
                  <form action="insert_faculty_course.php" method="POST"> 

        
      <?php
        $sql = "SELECT cname FROM courses;";
        $result = mysqli_query($conn,$sql);
        if ($result) 
        {
          echo '<label>Course name:';
          echo '<select name="course name">';
         // echo '<option value="">all</option>';

          $num_results = mysqli_num_rows($result);
          for ($i=0;$i<$num_results;$i++) {
            $row = mysqli_fetch_array($result);
            $cname = $row['cname'];
            echo '<option value="' .$cname. '">' .$cname. '</option>';
          }

          echo '</select>';
          echo '</label>';
        }

      ?>                 

        <form>
              Faculty ID:
              <select>
                  <option>-- Select Faculty ID --</option>
          <?php
					$sql1 = "SELECT DISTINCT fid FROM fprofile";
					$result1 = mysqli_query($conn,$sql1);

              while ($row = mysqli_fetch_array($result1)) {                  
                  
                  echo "<option value='" .$row['fid']. "'  >".$row['fid']. "</option>";
              }
          ?>
              </select>
          </form>

          <form>
              Course Name:
              <select>
                  <option>-- Select Course Name --</option>
          <?php
          $sql = "SELECT DISTINCT cname FROM courses";
          $result = mysqli_query($conn,$sql);

              while ($row = mysqli_fetch_array($result)) {                  
                  
                  echo "<option value='" .$row['cname']. "'  >".$row['cname']. "</option>";
              }
          ?>
              </select>
          </form>
              <button type = "submit" id = "submits" name="submit"><b>Add Course</b></button>
                  </form>
                </div>
            </section>

          </div>
          <div class="modal-footer" style="background: #1f1f2e;">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          </div>
        </div>
        
      </div>
    </div>

</body>
</html>