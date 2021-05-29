<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/urs/webinit.php';

$id = $_GET['id'];

$sql = "
DELETE FROM board 
WHERE board.id = $id;
";

DB_delete($sql);
?>
<?php
require_once __DIR__ . '/../../head.php';
?>

 
<?php
require_once __DIR__ . '/../../foot.php';
?>