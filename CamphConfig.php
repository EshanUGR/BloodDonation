<?php
$servername="localhost";
$username="root";
$password="";
$dbname="camp_details";


$conn=new mysqli($servername,$username,$password,$dbname);
//connection
if($conn->connect_error)
{

    die("Connection failed:".$conn->connect_error);

}
else 
{

    echo "<script type='text/javascript'>
    alert('Camp Details page is loading!!');
  </script>";

}


?>
