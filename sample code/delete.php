<?php

include("db.php");

// sql to delete a record
$sql = "DELETE FROM student WHERE id=2";

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>