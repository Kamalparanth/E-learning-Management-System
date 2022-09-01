<!DOCTYPE html>
<html>
<head>
	<title>Course list</title>

	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">

  	<link rel="stylesheet" type="text/css" href="style.css">
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
              <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>CourseId</th>                      
                      <th>Courses</th>
                    </tr>
                  </thead>
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
</body>
</html>