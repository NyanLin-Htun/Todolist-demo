<?php

require 'config.php';

$sql = "DELETE FROM todo WHERE id=".$_GET['id'];
$statement = $pdo->prepare($sql);
$update = $statement->execute();
header('location: index.php');

?>