<?php
if (isset($_REQUEST["password"])) {

    extract($_REQUEST);
    if (empty($email) or empty($password) or empty($names)) {

       $message="Fill in all values";
    }
    else {
        require 'db.php';
        $password = md5($password);
        $sql = "INSERT INTO `users`(`id`, `names`, `email`, `password`) VALUES ( NULL ,'$names','$email','$password')";
        mysqli_query($conn, $sql) or die(mysqli_error($conn));
        $message = "Registered successfully";
        header( "location:login.php");//redirect
    }
}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>register</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>
<body>

<div class="container">
    <form class="row justify-content-center">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                    <h3>register here</h3>
                </div>
                <div class="card-body">

                    <?php
                    if (isset($message))
                        echo $message
                    ?>
                    <form action="register.php" method="post">

                        <div class="form-group">
                            <label>Full names</label>
                            <input type="text" class="form-control " name="names">
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control " name="email">
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control " name="password">
                        </div>

                        <button type="submit" class="btn btn-primary btn-block">Sign up</button>
                    </form>

                    <a href="login.php" class="text-center">sign in here</a>
                </div>
            </div>


        </div>


</html>