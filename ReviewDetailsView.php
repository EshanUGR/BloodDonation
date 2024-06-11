<?php
include_once("ConnectionReviews.php");
?>

<!Doctype html>
<html>
<head>


<title>edit</title>
<link rel="stylesheet" href="ReviewCamp.css" />
</head>

<body>

<!-- <navigaton bar  -->
<header>
  <nav>
    <div class="logo">
      <h1>Blood Donating System</h1>
      <img src="logo.jpg" class = "img1"  alt="Blood Donating System Logo" height="50px" width="50px">
      
    </div>
    <ul class="menu">
      <li><a href="#">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Donate</a></li>
      <li><a href="#">View Center</a></li>
      <li><a href="#">Contact Us</a></li>
      <li><a href="#">View Camps</a></li>
    </ul>
  </nav>
  </header>











<div class="div3">
<h1>Camphs Reviews</h1>

</div>



<!-- review border inline css -->
<table border="1" width="100%"  style="border-color:red";>
    <tr>
        <th >Name</th>
        <th >Description</th>
        <th >Rate</th>
        
    </tr>
<?php
$sql = "SELECT * FROM review_2 ";
$result = $conn->query($sql);

if ($result->num_rows > 0) { 
 while ($row = $result->fetch_assoc()) {
     echo "<tr><td>".$row["Name"]."</td><td>".$row["des"]."</td><td>".$row["rate"]."</td><tr>";
   

    
 }
} else {
 echo "Empty Rows";
}
echo "</table>";
mysqli_close($conn);

?>
   




<tbody>



</tbody>
</table>

<footer>
  <div class="container">
    <div class="footer-links">
      <a href="">Contact Us |</a>
      <a href="">Privacy Policy |</a>
      <a href="">Terms and Conditions |</a>
      <a href="">Cookies |</a>
      <a href="">FAQ</a>
    </div>
    <div class="footer-info">
      
      <p  class = "copy">&copy; 2023 SBTS. All Rights Reserved.</p>
    </div>
  </div>
</footer>



</body>

</html>
