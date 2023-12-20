<body>
<table bgcolor="azure" cellpadding="5" cellspacing="5" border="1" align="center">
	<tr>
		<th>rollnumber</th>
		<th>FNAME</th>
		<th>LNAME</th>
		<th>EMAIL</th>
	</tr>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "BOOKSTORE";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT id, firstname, lastname, email FROM student ";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
 while($row = mysqli_fetch_assoc($result)) 
  {
    echo "<tr><td>".$row["id"]." </td>
	     <td> " . $row["firstname"]. "</td>
             <td>". $row["lastname"]. "</td>
			 <td>".$row["email"]."</td>
			 </tr>";
 }
 }
 else {
 echo " no data(rows) in the table";
}
mysqli_close($conn); ?>