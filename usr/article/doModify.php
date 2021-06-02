<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/webinit.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/logincheck.php';

$pageTitle = "ARTICLE MODIFY";

$articleId = getIntValueOr($_POST['id'], 0);

if($articleId == 0){
  jsHistoryBackExit("게시물 번호를 입력해 주세요");
}

$title = getStringValueOr($_POST['title'], 0);
$body = getStringValueOr($_POST['body'], 0);

if(!$title){
  jsHistoryBackExit("제목을 입력해주세요.");
}

if(!$body){
  jsHistoryBackExit("내용을 입력해주세요.");
}

$sql = " 
UPDATE article
SET `title` = '$title',
`body` = '$body',
`updateDate` = NOW()
WHERE `id` = $articleId;
";

DB_update($sql);

jsLocationReplaceExit('/usr/article/list.php?id=$article['$articleId']', "게시물이 수정되었습니다.");
?>
