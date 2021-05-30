<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/webinit.php';
$pageTitle = "ARTICLE WRITE";

$title = $_POST['title'];
$body =$_POST['body'];


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

