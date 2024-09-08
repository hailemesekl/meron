<?php
$conn = mysqli_connect("localhost","root","","meron");
if($conn){
   // echo "seful";
}else{
    die(mysqli_error($conn));
}

?>