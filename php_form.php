<?php
	$source = $_POST["mail"];
	if ($_POST["comment"]) {
		mail("u17049602@tuks.co.za", "Comments", 
		$_POST["comment"], "From: $source");
	}
?>

<html>
	<body>
		<br>
		Welcome <?php echo $_POST['name'];?><br>
		Your email address is: <?php echo $_POST['mail'];?><br>
		Your comment is: <?php echo $_POST['comment'];?><br>
	</body>
</html>