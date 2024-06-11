<?php
include_once("ConnectionReviews.php");
?>





<?php
$name=$_POST["Name"];
$Des=$_POST["DES"];


if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $opt=$_POST["Option"];

    if($opt=="1.0")
    {
        
    }
   else if($opt=="2")
    {
        
        
    }
    
   else if($opt=="3")
    {
        
    }

    else if($opt=="4")
    {
        
    }
    else if($opt=="5")
    {
        
    }





}

?>

<?php
/*




*/






$sql="INSERT INTO review_2(id,Name,des,rate) VALUES('','$name','$Des','$opt')";

if(mysqli_query($conn,$sql))
{

    echo"<script> alert('Record Inserted Successfully!!')</script>";
   // header("Location:./ReviewSelection.html");

}
else{
    echo "errors !!";
}


?>