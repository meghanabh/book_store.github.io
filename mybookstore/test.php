
<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php

$_SESSION["favcolor"] = "green";
header("location: test1.php");
?>

</body>
</html>