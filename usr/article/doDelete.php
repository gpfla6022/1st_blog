<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/webinit.php';
$pageTitle = "ARTICLE DELETE";
require_once $_SESSION['DOCUMENT_ROOT'] . '/loginCheck.php';


$articleId = $_GET['id'];

$sql = "
DELETE FROM article 
WHERE article.id = $articleId;
";

DB_delete($sql);


jsLocationReplaceExit('/usr/article/list.php?id=$articleId', "게시물이 삭제되었습니다.");
?>
