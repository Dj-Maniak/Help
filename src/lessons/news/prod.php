<?php
$football = $_POST['name'];

$file = fopen("sport.txt", "a");
fputs($file, "$football\n");

fclose($file);
header('Location: /news/blog.html');

