<?php
$servername="localhost";
$username="root";
$password="";
$dbname="organi_zation";


$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error)
{

    die("Connection falild organization".$conn->connet_error);
}

else{
    echo "<script type='text/javascript'>
    alert('Connection successful!');
  </script>";
}
?>