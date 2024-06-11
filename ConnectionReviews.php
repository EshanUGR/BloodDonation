<?php
$servername="localhost";
$username="root";
$password="";
$dbname="review";


$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error)
{

    die("Connection falild ".$conn->connet_error);
}

else{
    echo "<script type='text/javascript'>
    alert('Camp Reviews page is loading !!');
  </script>";
}
?>