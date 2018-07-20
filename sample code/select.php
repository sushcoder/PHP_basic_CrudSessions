<?php

include("db.php");

$sql = "SELECT * FROM student";
$result = mysqli_query($conn, $sql);

echo "<table border='1'>
<tr>
<th>name</th>
<th>emailid</th>
<th>phone</th>
</tr>";



if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {

    	echo "<tr>";
       echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['emailid'] . "</td>";
echo "<td>" . $row['phone'] . "</td>";

echo "</tr>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>