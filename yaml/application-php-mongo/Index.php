<html lang="en">
  <head>
    <meta charset="utf-8">    
    <meta name="description" content="Displaying list of Courses">    
    <link href="./lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Courses</title>
</head>
<body>
<?php
   error_reporting(E_ALL); 
   ini_set('display_errors', 1); 
   
   require_once __DIR__ . '/vendor/autoload.php';
   $host_name = 'mongodb-service';
   $user = 'root';
   $password = 'mongoset1010';
   $database='appdb';
   $collection='Course';
   try
   {
   $connection = new MongoDB\Client("mongodb://{$user}:{$password}@{$host_name}:27017");
   }
   catch (Exception $e) {
    
}
   
    $db=$connection->{$database};
    $collect=$db->{$collection};
    $cursor = $collect->find();  
   
   
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
                foreach ($cursor as $coursedocument)
                {
            ?>
        <tbody>
          <tr>
            <th scope="row"><?php echo $coursedocument['CourseID'];?></th>
            <td><img src=<?php echo $coursedocument['ExamImage'];?> width="400" height="100"></td>
            <td><?php echo $coursedocument['CourseName'];?></td>
            <td><?php echo $coursedocument['Rating'];?></td>            
          </tr>          
        </tbody>
        <?php
                }
            ?>
      </table>
    </div>
</body>
</html>

