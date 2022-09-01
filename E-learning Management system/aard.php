<!DOCTYPE html>
<html>
<head>
	<title>Admin registration</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  	<link rel="stylesheet" type="text/css" href="style.css">
	  <link rel="icon" type="image/jpg" href="images/icon.jpg">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<body>

<div class="w3-top">
  <div class="w3-bar w3-card w3-xlarge"  style="background-color: #f5f5f5;" id="myNavbar">
    <img src="logo.png" alt="Logo" width="80" height="80" style="float:left">
      <span class="w3-bar-item w3-xlarge "> Admin registration validation </span>
      <div class="w3-right w3-hide-small">
        <a href="ad.php" class="w3-bar-item w3-button"><i class="material-icons">dashboard</i> Dashboard</a>
        <a href="homepage.html" class="w3-bar-item w3-button"><i class="material-icons">logout</i> Logout</a>
      </div>
  </div>  
        
    <div class="card mb-3">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Admin username</th>                      
                      <th>Admin Name</th>
                      <th>Admin Email</th>
                      <th>Add</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Admin username</th>                      
                      <th>Admin Name</th>
                      <th>Admin Email</th>
                      <th>Add</th>
                      <th>Delete</th>
                    </tr>
                  </tfoot>
                  <?php
                    include ('connection.php');             
                    $record="SELECT * FROM alogin RIGHT JOIN aregister ON alogin.aname = aregister.aname1 where alogin.aname IS NULL ";
                    $x= (mysqli_query($conn, $record));
                    while ($row= mysqli_fetch_array($x)) 
                  {
                  ?>
                  <tbody>
                    <tr>
                      <td><?php echo $row['aname1']; ?></td>
                      <td><?php echo $row['adminname']; ?></td>
                      <td><?php echo $row['aemail']; ?></td>

                        <td><a href="aar.php?aname1=<?php echo $row['aname1']; ?>&amp;apswd1=<?php echo $row['apswd1']; ?>&amp;adminname= <?php echo $row['adminname']; ?>&amp;aemail=<?php echo $row['aemail']; ?>" class="btn btn-danger btn-sm text-light">Add</a></td>
                        <td><a href="dar.php?aname1=<?php echo $row['aname1']; ?>" class="btn btn-danger btn-sm text-light">Delete</a></td>
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