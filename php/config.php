<?php 

    $con = mysqli_connect("localhost","root","","mysite") or die("Couldn't Connect");
    if (mysqli_connect_errno()) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>