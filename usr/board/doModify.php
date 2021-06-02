<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/webinit.php';
# $_SERVER['DOCUMENT_ROOT'] => htdocs, '/webinit.php' 은 htdocs에 들어있으므로 나갈필요 없음.

$pageTitle = "BOARD MODIFY";

$id = getIntValueOr($_POST['id'], 0);

if($id == 0){
  jsHistoryBackExit("게시판 번호를 입력해 주세요.");
}

$name = getStringValueOr($_POST['name'], 0);
$boardCode = getStringValueOr($_POST['boardCode'], 0);

if(!$name){
  jsHistoryBackExit("제목을 입력해 주세요.");
}

if(!$boardCode){
  jsHistoryBackExit("제목을 입력해 주세요.");
}


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


