<html lang="en">
  <head>
    <meta charset="utf-8">    
    <meta name="description" content="Displaying list of Courses">    
    <link href="./lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Courses</title>
</head>
<body>
<?php
   $host_name = 'mysql-service';
   $user = 'appusr';
   $password = 'appusr@1090';
   $database='appdb';
   $connection = new mysqli($host_name, $user, $password,$database);
   
   if($connection) {
    $statement = " SELECT CourseID,ExamImage,CourseName,rating from Course ";
    $records = $connection->query($statement);
    $connection->close();
   }
   
   ?>
    <div class="container-sm">

      <h1>Courses</h1>
      <p class="lead">This is a list of Courses</p>
    

    <table class="table table-striped table-bordered">
        <thead class="table-dark">
          <tr>
            <th class="th-sm" scope="col">Course ID</th>
            <th class="th-sm" scope="col">Course Image</th>
            <th class="th-sm" scope="col">Course Name</th>
            <th class="th-sm" scope="col">Rating</th>            
          </tr>
        </thead>
        <?php             
                while($data=$records->fetch_assoc())
                {
            ?>
        <tbody>
          <tr>
            <th scope="row"><?php echo $data['CourseID'];?></th>
            <td><img src=<?php echo $data['ExamImage'];?> width="400" height="100"></td>
            <td><?php echo $data['CourseName'];?></td>
            <td><?php echo $data['rating'];?></td>            
          </tr>          
        </tbody>
        <?php
                }
            ?>
      </table>
    </div>
</body>
</html>

