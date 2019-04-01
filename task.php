<?php
require 'security.php';


?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>task</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>
<body>
<?php
require 'navbar.php';
?>
<div class="container">
 <table id="tasks" class="table table-dark">

     <thead>
     <tr>
         <th>ID</th>
         <th>NAMES</th>
         <th>EMAIL</th>
         <th>PASSWORD</th>


     </tr>
     <tbody>
     <tr>
         <!-- <td>1</td>
           <td>sally</td>
           <td>sally@gmail.com</td>
           <td> 12323455</td>
-->

     </tr>

     <?php
   /*  $conn = mysqli_connect("localhost", "root", "", "tasks");*/
     require 'db.php';
     $id=$_SESSION["info"]["id"];
     $sql = "select * from items where  user_id = $id";
     $results = mysqli_query($conn, $sql);
     while ($row = mysqli_fetch_assoc($results)) {
         extract($row);
         echo "<tr>
      <td>$id</td>
      <td>$title</td>
      <td>$status</td>
      <td>$date</td>
     
      <td><a  class='btn btn-success btn-sm' href='delete.php?id=$id'>delete</a></td>

  </tr>";

     }

     ?>

     </tbody>


     </thead>

 </table>



</div>
<script>
    $(document).ready(function() {
        $('#tasks').DataTable();
    } );

</script>
</body>
</html>














</div>
</body>
</html>