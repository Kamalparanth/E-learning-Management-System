<!DOCTYPE html>
<html>
<head>
	<title>Manage Courses</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  	<link rel="stylesheet" type="text/css" href="style1.css">
	  <link rel="icon" type="image/jpg" href="images/icon.jpg">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<body>

        
    <div class="card mb-3">
        <div class="card-body">
          <a class="btn btn-primary mb-3" href="" data-bs-toggle="modal" data-bs-target="#Add_Course_Modal">Add Courses</a>
          <a class="btn btn-primary mb-3" href="ad.php" >Back to dashboard</a>
          <a class="btn btn-primary mb-3" href="homepage.html">Logout</a>
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>CourseId</th>                      
                      <th>Courses</th>
                      <th>Delete</th>
                      <th>Update</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>CourseId</th>                      
                      <th>Courses</th>
                      <th>Delete</th>
                      <th>Update</th>
                    </tr>
                  </tfoot>
                  <?php
                    include ('connection.php');             
                    $record="SELECT * FROM courses";
                    $x= (mysqli_query($conn, $record));
                    while ($row= mysqli_fetch_array($x)) 
                  {
                  ?>
                  <tbody>
                    <tr>
                      <td><?php echo $row['cid']; ?></td>
                        <td><?php echo $row['cname']; ?></td>
                        

                        <td><a href="delete_courses.php?cid=<?php echo $row['cid']; ?>" class="btn btn-danger btn-sm text-light">Delete</a></td>
                        <td><a href="update_courses.php?cid=<?php echo $row['cid']; ?>" class="btn btn-primary btn-sm text-light">Update</a></td>

                    </tr>
                  </tbody>
                  <?php
                    }
                  ?>
                </table>
              </div>
            </div>
            <div class="card-footer small text-muted"></div>
          </div>


  <!----------------------------------- Modal for Admin Add Courses --------------------------------------->
  
    <!-- Modal -->
    <div class="modal fade" id="Add_Course_Modal" role="dialog">
      <div class="modal-dialog">
      
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header" style="background: #1e90ff; height: 100px;">

            <h2>Add Courses</h2>
            
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <h4 class="modal-title"></h4>
          </div>
          <div class="modal-body" style="background-image: linear-gradient(#c63939, #024759);">
            
            <section class="logsection">
               <div class="logform">

                  <form action="add_courses.php" method="POST">

                  <label for=""><b>New Course</b></label>
                  <span id="" class="require"></span><br>
                  <input type = "text" id  ="" name="course" placeholder = "Enter New Course" required="value"><br><br>
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