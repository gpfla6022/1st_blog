<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/webinit.php';
$pageTitle = "REPLY DELETE";

$id = $_GET['id'];
$relId = $_GET['relId'];

$sql = "
DELETE FROM reply 
WHERE reply.id = $id;
";

DB_delete($sql);

jsLocationReplaceExit("/usr/article/detail.php?id=$relId", "댓글 삭제가 완료되었습니다.");
?>
