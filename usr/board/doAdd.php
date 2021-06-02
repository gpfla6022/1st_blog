<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/webinit.php';
# $_SERVER['DOCUMENT_ROOT'] => htdocs, '/webinit.php' 은 htdocs에 들어있으므로 나갈필요 없음.
$pageTitle = "BOARD ADD";

$name = getStringValueOr($_POST['name'], 0);
$boardCode = getStringValueOr($_POST['boardCode'], 0);

if(!$name){
  jsHistoryBackExit("제목을 입력해 주세요.");
}

if(!$boardCode){
  jsHistoryBackExit("제목을 입력해 주세요.");
}

$sql = "
INSERT INTO board
SET `name` = '$name',
boardCode = '$boardCode',
regDate = NOW(),
updateDate = now()
";

DB_insert($sql);


jsLocationReplaceExit('/usr/board/list.php', "게시판이 생성되었습니다.");
?>