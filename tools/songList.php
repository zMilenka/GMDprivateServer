<table border="1"><tr><th>ID</th><th>Name</th></tr>
<?php
//error_reporting(0);
include "../connection.php";
$query = $db->prepare("SELECT * FROM songs WHERE ID >= 5000000 ORDER BY ID DESC");
$query->execute();
$result = $query->fetchAll();
foreach($result as &$song){
	echo "<tr><td>".$song["ID"]."</td><td>".$song["name"]."</td></tr>";
}
?>
</table>