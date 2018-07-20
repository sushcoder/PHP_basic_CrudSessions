<?php  
session_start();  
?>  
<html>  
<body>  
<?php  
$_SESSION["user"] = "Sachin";  
echo "Session information are set successfully.<br/>";  
?>  
<a href="s2.php">Visit next page</a>  
</body>  
</html>