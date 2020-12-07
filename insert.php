

<?php
	require_once "conn.php";

$user= $_POST["name"];
$email= $_POST["email"];
$comment= $_POST["comments"];



$sql = "INSERT INTO contact (name,email,comment)
VALUES ('$user', '$email', '$comment')";
if (mysqli_query($conn, $sql)) {
echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>