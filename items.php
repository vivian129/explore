<?php
if (isset($_REQUEST["date"])) {
    extract($_REQUEST);
    require 'security.php';
    $id=$_SESSION["info"]["id"];
    require 'db.php';
    $sql = "INSERT INTO `items`(`id`, `title`, `status`, `date`,`user_id` )
 VALUES (NULL,'$title','$status','$date' ,'$id')";
    mysqli_query($conn, $sql) or die(mysqli_error($conn));

}

?>

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
    <title>items</title>

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
    <div class="row justify-content-center">
        <div class="col-sm-5">

            <p class="text-success"></p>


            <form action="items.php" method="post">
                <div class="form-group">

                    <input type="text" required class="form-control" name="title" placeholder="title">
                </div>

                <div class="form-group">
                    <input type="date" required class="form-control" name="date" placeholder="date">
                </div>


                <div class="form-group">
                    <select name="status" class="form-control">
                        <option value="complete">complete</option>
                        <option value=" incomplete">incomplete</option>

                    </select>
                </div>

                <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </form>


        </div>


    </div>


</div>


</body>
</html>

