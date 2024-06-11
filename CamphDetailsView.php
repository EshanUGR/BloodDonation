<?php
include_once("CamphConfig.php");
?>

<!Doctype html>
<html>
<head>


<title>Camps details</title>

<link rel="stylesheet" href="campStyle.CSS" />

</head>

<body>
<!-- navigation bar -->
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
<h1>Camphs Details</h1>

</div>




<table border="1" width="100%" class="table1">
    <tr>
        <th >Name</th>
        <th >Location</th>
        <th >city</th>
        <th  style="text-align:left">province</th>
        <th >district</th>
        <th >date</th>
		<th >vol_num</th>
		<th >email</th>
        <th>Contactnum</th>
        
    </tr>
<?php
$sql = "SELECT * FROM camp";
$result = $conn->query($sql);

if ($result->num_rows > 0) { 
 while ($row = $result->fetch_assoc()) {
     echo "<tr><td>".$row["name"]."</td><td>".$row["location"]."</td><td>".$row["city"]."</td><td>".$row["province"]."</td><td>".$row["district"]."</td><td>".$row["date"]."</td>"."</td><td>".$row["vol_num"]."</td>"."</td><td>".$row["email"]."</td>"."</td><td>".$row["contact_num"]."</td>";
     /*
     echo "<td><a href='editRecord.php?id=".$row["item_id"]."&name=".$row["item_name"]."&description=".$row["item_description"]."&price=".$row["price"]."&quantity=".$row["quantity"]."&code=".$row["item_code"]."'>Edit</a></td>";
     echo "<td><a href='deleteItems.php?id=".$row['item_id']."'>Delete</a></td></tr>";*/

    
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
