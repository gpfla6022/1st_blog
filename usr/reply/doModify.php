<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/webinit.php';
$pageTitle = "REPLY MODIFY";

$id = $_POST['id'];
$relId = $_POST['relId'];
$body = $_POST['body'];

$sql = "
UPDATE `reply`
SET `body` = '$body',
`updateDate` = NOW()
WHERE `id` = $id
";

DB_update($sql);

jsLocationReplaceExit("/usr/article/detail.php?id=$relId", "댓글 수정이 완료되었습니다.");
?>
