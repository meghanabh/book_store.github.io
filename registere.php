<?php
include 'db.php';
?>
<?php
session_start();


/* Registration process, inserts user info into the database 
   and sends account confirmation email message
 */

 
// Set session variables to be used on profile.php page
$email = $_POST['email'];
$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$pwd =$_POST['password'];

$sql = "INSERT INTO users (first_name, last_name, email,password)
VALUES ('$fname', '$lname', '$email','$pwd')";

if ($mysqli->query($sql) === TRUE) {
     header("location: myaccount.php");
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}

$mysqli->close();

?>
