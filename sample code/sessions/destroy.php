<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// remove all session variables
session_unset(); 

// destroy the session 
session_destroy(); 

#echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
#echo "Favorite animal is " . $_SESSION["favanimal"] . ".";



?>

</body>
</html>