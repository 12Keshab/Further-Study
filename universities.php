<?php
include "connect.php";

$sql = "SELECT * FROM universities";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
<title>Universities</title>
<link rel="stylesheet" href="style.css">
</head>

<body>
<body>

<nav>
<a href="index.html">Home</a>
<a href="add_university.html">Add University</a>
<a href="universities.php">Universities</a>
</nav>

<h2>University List</h2>

<table>

<tr>
<th>University</th>
<th>Country</th>
<th>Program</th>
<th>Tuition Fee</th>
</tr>

<?php
if($result->num_rows > 0){

while($row = $result->fetch_assoc()){
echo "<tr>
<td>".$row["name"]."</td>
<td>".$row["country"]."</td>
<td>".$row["program"]."</td>
<td>".$row["fee"]."</td>
</tr>";
}

}
?>

</table>
<button><a href="index.html">Home</a></button>
</body>
</html>