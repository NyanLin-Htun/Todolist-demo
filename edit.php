<?php

include 'header.php';
require 'config.php';

$sql = "SELECT * FROM todo WHERE id=".$_GET['id'];
$statement = $pdo->prepare($sql);
$statement->execute();
$result = $statement->fetchAll();

?>

<?php

include 'footer.php';

?>