<!DOCTYPE HTML>
<html>
	<body>
		<?php
			$q = intval($_GET['q']);
			$con = mysqli_connect("db", "root1237", "4427");
			mysqli_select_db("info");
			$sql = "SELECT username, password, email, money FROM users WHERE username = ?";
			$stmt = $mysqli->prepare($sql);
			$stmt->bind_param("s", $q);
			$stmt->execute();
			$stmt->store_result();
			$stmt->bind_result($u, $p, $e, $m);
			$stmt->fetch();
			$stmt->close();
			echo "$u,$p,$e,$m";
		?>
	</body>
</html>
