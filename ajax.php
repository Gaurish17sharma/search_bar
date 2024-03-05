<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="ajax.css">
</head>

<?php

include "db.php";

if (isset($_POST['search'])) {
   $Name = $_POST['search'];

   $Query = "SELECT * FROM countries WHERE name REGEXP '^$Name' LIMIT 5";
   $ExecQuery = MySQLi_query($con, $Query);

   echo "<table>
   <tr>
   <th>id</th>
   <th>Name</th>
   </tr>";

   while ($Result = mysqli_fetch_array($ExecQuery)){
    echo "<tr>";
    echo "<td>" . $Result['id'] . "</td>";
    echo "<td>" . $Result['name'] . "</td>";
    echo "<tr>";
   }

   echo "</table>";
   mysqli_close($con);

}
?>

</html>
