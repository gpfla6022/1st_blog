<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/webinit.php';
$pageTitle = "ARTICLE MODIFY";

$articleId = $_POST['id'];

$title = $_POST['title'];
$body = $_POST['body'];

$sql = " 
UPDATE article
SET `title` = '$title',
`body` = '$body',
`updateDate` = NOW()
WHERE `id` = $articleId;
";

DB_update($sql);

jsLocationReplaceExit('/usr/article/list.php?id=$article['articleId']', "게시물이 수정되었습니다.");
?>
