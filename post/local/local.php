<?php
header("Content-Type:text/html; charset=utf-8");
echo "input:".$_POST['input'];
echo "<br>";
echo "select:".$_POST['select'];
echo "<br>";
echo "checkbox:";
print_r($_POST["checkboxvar"]);
echo "<br>";
echo "radio:".$_POST['radio'];
?>
<html>
<body>
<form action="local.php" method="post">
	input: <input type="text" name="input" />
	<br>
	
	select:<select name="select">
        <option value="" selected="selected"></option>
        <option VALUE="select1"> select1</option>
        <option VALUE="select2"> select2</option>
        <option VALUE="select3"> select3</option>
    </select>
	<br>
	
	<input type='checkbox' name='checkboxvar[]' value='checkbox1'>checkbox1<br>
    <input type='checkbox' name='checkboxvar[]' value='checkbox2'>checkbox2<br>
    <input type='checkbox' name='checkboxvar[]' value='checkbox3'>checkbox3<br>
	<br>

	<input type="radio" name="radio" value="radio1"> radio1<br>
	<input type="radio" name="radio" value="radio2"> radio2<br>
	<br>
	
	<input type="submit" value="submit"/>
</form>
</body>
</html> 