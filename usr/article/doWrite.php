<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/webinit.php';
$pageTitle = "ARTICLE WRITE";

$title = getStringValueOr($_POST['title'], 0);
$body =getStringValueOr($_POST['body'], 0);

if(!$title){
  jsHistoryBackExit("제목을 입력해주세요.");
}

if(!$body){
  jsHistoryBackExit("내용을 입력해주세요.");
}

$boardIndex = $_POST['boardIndex'];
$memIndex = $_SESSION['logonMember']; # member['id']

$sql = "
INSERT INTO article
SET title = '$title',
`body` = '$body',
regDate = NOW(),
updateDate = NOW(),
memId = '$memIndex',
boardIndex = '$boardIndex';
";

$id = DB_insert($sql);

jsLocationReplaceExit("detail.php?id=$id", "$id번 게시물 작성이 완료되었습니다." );

?>

