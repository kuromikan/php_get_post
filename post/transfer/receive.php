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