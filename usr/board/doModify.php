<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/webinit.php';
# $_SERVER['DOCUMENT_ROOT'] => htdocs, '/webinit.php' 은 htdocs에 들어있으므로 나갈필요 없음.

$pageTitle = "BOARD MODIFY";

$id = $_POST['id'];
$name = $_POST['name'];
$boardCode = $_POST['boardCode'];

$sql = "
UPDATE `board`
SET `name` = '$name',
boardCode = '$boardCode',
updateDate = NOW()
WHERE `id` = $id;
";

DB_update($sql);

jsLocationReplaceExit('/usr/board/list.php', "게시판이 수정되었습니다.");
?>


