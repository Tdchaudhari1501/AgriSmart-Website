
<?php
include_once 'dbConfig.php';

$name = $_POST["name"];
$email = $_POST["email"];
$query = $_POST["textarea"];

if (!$db) die("Could not connected " . mysqli_connect_error());
$stmt = "insert into contact_us(name,email,query) values('$name','$email','$query')";
if ($db->query($stmt) === true) echo "Your Suggestion Sent Successfully !"."<br>"."ThankYou for Giving Your Valuable Suggestion !";
else echo "Error " . $db->error;
?>