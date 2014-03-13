<html>
<head>
	<title>Databases</title>
	<link rel="stylesheet" type="text/css" href="diomid/wp-content/themes/twentytwelve/style.css" />
	<meta charset="utf8" />
</head>
<body style="margin: 20px;">
	<?php
		include 'connection.class.php';
		$db = new Mysql_connect('localhost', 'root', '', 'test');
		$data = $db->connect();
		echo('<form action="'.$_SERVER['PHP_SELF'].'" method="POST">
			<input type="submit" name="abort" value="Закрыть соединение"/>
			</form>');
		if (isset($_POST['abort'])){
			$conn_close = $db->closeConn();
		}
	?>
</body>
</html>