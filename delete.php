<?php
if (isset($_GET["id"])){

    $conn = mysqli_connect("localhost", "root", "", "employeees");
   extract($_GET);
    $sql="delete from employeee where id=$id";
    mysqli_query($conn,$sql);

}
header("location:fetch.php");