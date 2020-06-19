<?php
$path = $_SERVER["SCRIPT_FILENAME"];

file_put_contents("php://stdout", "\nRequested: $path");
echo "<p>Hello World</p>";
phpinfo();
?>