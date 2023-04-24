
<?php
	$hostname="localhost";
	$username="root";
	$password="root";
	$dbname="plant";
	
	$conn = mysqli_connect($hostname,$username, $password, $dbname) or die ("html>script language='JavaScript'>alert('Unable to connect to database! Please try again later.'),history.go(-1)/script>/html>");
	
	# Check If Record Exists
	$query = "SELECT * FROM family";
	$result = mysqli_query($conn, $query);
?>

<?php
	echo "<h2>MySQL 에서 가져온 데이터</h2>";
	$table = "<table border=1>
							<thead>
								<tr>
									<td>short description</td>
									<td>description</td>
								</tr>
							</thead>
							<tbody>
						";
	if($result){
		while($row = mysqli_fetch_array($result)){
			$table .= "<tr>
					<td>".$row[shortDesc]." </td>
					<td>".$row[description]." </td>
					</tr>
				";
		}
	}
	$table .= "</tbody></table>";	
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Main</title>
</head>
<body>
  <h1>hello</h1>
	<?php echo $table ?>
	<form action="search.php" method="get">
		<input placeholder="search" name="search"/>
		<button>search</button>
	</form>
</body>
</html>