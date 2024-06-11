<?php
include_once("OrganizeConfig.php");
?>
<?php
/*$servername = "localhost";
$username = "root";
$password = "";
$dbname="organi_zation";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {

    die("Connection failed:" . $conn->connect_error);
    
}
*/
session_start(); // Start the session

$name = $_POST['user'];
$password = $_POST['pass'];





$sql = "SELECT* FROM organizer WHERE Username= '$name' AND Password = '$password'";

$result=$conn->query($sql);



if ($result->num_rows == 1) {
  echo "  <script> alert('login successfull!')</script>";
  
  $row = $result->fetch_assoc();
  $userID = $row['id'];
 $SESSION_['$id'] = $userID ;




   /* echo "Login successful. Redirecting to Organizer Home page...";*/
    header("Location: ./OrganizerHomepage.html");

    echo "<script type='text/javascript'>
    alert(' successful! login');
  </script>";
  
    
} else {
    
    echo "<script type='text/javascript'>
    alert('Invalid username or password!');
  </script>";
}

$conn->close();
?>