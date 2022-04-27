<?php

require 'config.php';

$process = 'Complete';

$sql = "UPDATE todo SET process='$process' WHERE id=".$_GET['id'];
$statement = $pdo->prepare($sql);
$update = $statement->execute();
header('location: index.php');
?>


