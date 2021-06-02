<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/webinit.php';
require_once $_SESSION['DOCUMENT_ROOT'] . '/loginCheck.php';

$pageTitle = "ARTICLE DELETE";

$articleId = $_GET['id'];

if($articleId == 0){
  jsHistoryBackExit("게시물 번호를 입력해 주세요");
}

$sql = "
DELETE FROM article 
WHERE article.id = $articleId;
";

$article = DB_delete($sql);

if($article == 0){
  jsHistoryBackExit("${articleId}번 게시물이 존재하지 않습니다.");
}

jsLocationReplaceExit('/usr/article/list.php?id=$articleId', "게시물이 삭제되었습니다.");
?>
