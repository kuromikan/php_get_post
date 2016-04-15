<?php
header("Content-Type:text/html; charset=utf-8");
echo "input:".$_GET['input'];
?>
<html>
<body>
<form action="local.php" method="get">
	input: <input type="text" name="input" />
	<input type="submit" value="submit"/>
</form>
</body>
</html> 