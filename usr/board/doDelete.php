<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/webinit.php';

$pageTitle = "BOARD DELETE";

$id = $_GET['id'];

$sql = "
DELETE FROM board 
WHERE board.id = $id;
";

DB_delete($sql);

jsLocationReplaceExit('/usr/board/list.php', "게시판이 삭제되었습니다.");
?>
