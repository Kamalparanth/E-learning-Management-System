<!DOCTYPE html>
<head>
<title>Map Faculty to the course </title>
<link rel="stylesheet" type="text/css" href="style.css">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
    body 
    {
        background-image: url('c1.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
    }

    .box{
            background: #f5f5f5;
            color: red;
            top: 50%;
            left: 50%;
            position: absolute;
            transform: translate(-50%,-50%);
            box-sizing: border-box;
            padding: 50px 30px;
        }

    h1
    {
        margin: 0px;
        padding: 0 20px 20px;
        text-align: center;
        font-size: 24px;
        color: Purple;
        font-weight: bold;
    }

    p{
        color: #f49126;
        margin: 0;
        padding: 0;
        font-weight: bold;
        }

    input{
        width: 100%;
        margin-bottom: 10px;
    }

     input[type="text"]
    {
        border: none;
        border-bottom: 1px solid #fff;
        background: transparent;
        outline: none;
        height: 40px;
        color: #673ab7;
        font-size: 16px;
    }

    input[type="submit"]
    {
        border: none;
        outline: none;
        height: 40px;
        background: #2196f3;
        color: #fff;
        font-size: 18px;
        border-radius: 20px;

    }


    input[type="submit"]:hover
    {
        cursor: pointer;
        background: #0097a7;
    }

    a
    {
        text-decoration: none;
        font-size: 16px;
        line-height: 20px;
        color: #069818;
    }


    a:hover
    {
        color: red;
    }

    .topright 
    {
        position: absolute;
        top: 8px;
        right: 16px;
        font-size: 18px;
    }
    /* Add a black background color to the top navigation */
    .topnav {
            background-color: #F5f5f5;
            overflow: hidden;
    }

    /* Style the links inside the navigation bar */
    .topnav a {
        float: left;
        color: #000000;
        text-align: center;
        padding: 25px 25px;
        text-decoration: none;
        font-size: 18px;
    }

    /* Right-aligned section inside the top navigation */
    .topnav-right {
        float: right;
    }
    
    .navbar {
        overflow: hidden;
        position: fixed;
        bottom: 0;
        width: 100%;
    }

    /* Style the links inside the navigation bar */
    .navbar a {
        float: left;
        display: block;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
    }

</style>
    
</head>
<body>

    <div class="topnav">
    <img src="logo.png" alt="Logo" width="80" height="80" style="float:left">
    <div class="topnav-right">
            <a href="ad.php" class="w3-bar-item w3-button"><i class="material-icons">reply</i>Back to Dashboard</a>
            <a href="homepage.html" class="w3-bar-item w3-button"><i class="material-icons">logout</i> LOGOUT</a>
    </div>
    </div>
    <?php 
        include('connection.php');
        $query = "SELECT * FROM `fprofile`";
        $query1 = "SELECT * FROM `courses`";
        $result = mysqli_query($conn, $query);
        $result1 = mysqli_query($conn, $query1);
        $options = "";
        $options1 = "";
        $options2 = "";

        while($row1 = mysqli_fetch_array($result))
        {
            $options = $options."<option>$row1[0]</option>";
        }

        while($row2 = mysqli_fetch_array($result1))
        {
            $options1 = $options1."<option>$row2[0]</option>";
            $options2 = $options2."<option>$row2[1]</option>";
        }


    ?>

    <div class="box">
        <h1>Map Faculty to courses</h1>
        <form name="myform"  action="insert_faculty_course.php" method="POST" >
            <p>Faculty ID</p>
            <select>
                <option>-- Select Faculty ID --</option>
                <?php echo $options;?>
            </select>
            <input type="text" name="facid" placeholder="Enter Faculty ID " required="">
            <p>Course ID</p>
            <select>
                <option>-- Select Course ID --</option>
                <?php echo $options1;?>
            </select>
            <input type="text" name="courseid" placeholder="Enter Course ID" required="">
            <p>Course Name</p>
            <select>
                <option>-- Select Course Name --</option>
                <?php echo $options2;?>
            </select>
            <input type="text" name="coursename" placeholder="Enter Course Name" required="">
            <input type="submit" name="submit" value="Submit">
            <br><br>
            <a href="ad.php">Exit</a>
        </form>
    </div>
</body>
</html>