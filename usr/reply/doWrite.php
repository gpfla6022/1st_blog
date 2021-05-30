<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/webinit.php';
$pageTitle = "REPLY WRITE";

$relId = $_POST['relId'];
$body = $_POST['body'];

$sql = "
INSERT INTO reply
SET relId = '$relId',
`body` = '$body', 
relTypeCode = 'article',
regDate = NOW(),
updateDate = NOW();
";

DB_update($sql);

jsLocationReplaceExit("/usr/article/detail.php?id=$relId", "댓글 작성이 완료되었습니다.")
?>

