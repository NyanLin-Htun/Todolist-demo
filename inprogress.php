<?php

require 'config.php';

$process = 'In Progress';

$sql = "UPDATE todo SET process='$process' WHERE id=".$_GET['id'];
$statement = $pdo->prepare($sql);
$update = $statement->execute();
header('location: index.php');
?>