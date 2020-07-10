<?php
require "config.php";

if (isset($_POST["submit"])) {
	$email = strip_tags($_POST["email"]);
	$comment = strip_tags($_POST["message"]);

	$sql = "INSERT INTO mailist (email,comment) VALUES ('$email','$comment')";

	$qry = mysqli_query($con, $sql);
	if (!$qry) {
		die("Query failed" . mysqli_errno($con));
	}
	else {
		header("Location: ../index.php");
	}
}

?>