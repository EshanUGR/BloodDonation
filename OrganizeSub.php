<?php
include_once("OrganizeConfig.php");
?>





<?php
$name=$_POST["field1"];
$address=$_POST["field2"];
$zip=$_POST["field3"];
$ContactNo=$_POST["field4"];
$email=$_POST["field5"];
$username=$_POST["field6"];
$password=$_POST["field7"];




$sql="INSERT INTO organizer(id,Name,Address,Zip,Contact,Email,Username,Password) VALUES('','$name','$address','$zip','$ContactNo','$email','$username','$password')";

if(mysqli_query($conn,$sql))
{

    echo"<script> alert('Record Inserted Successfully!!')</script>";

   header("Location:./OrganizReg.html");

}
else{
    echo "errors !!";
}


?>