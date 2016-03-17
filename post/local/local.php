<?php
header("Content-Type:text/html; charset=utf-8");
echo "intpu:".$_POST['input'];
?>
<html>
<body>
<form action="local.php" method="post">
	input: <input type="text" name="input" />
	<input type="submit" value="submit"/>
</form>
</body>
</html> 