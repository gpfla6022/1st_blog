<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/webinit.php';
# $_SERVER['DOCUMENT_ROOT'] => htdocs, '/webinit.php' 은 htdocs에 들어있으므로 나갈필요 없음.
$pageTitle = "MEMBER JOIN";

$memId = $_POST['memId'];
$memPW = $_POST['memPW'];
$memName = $_POST['memName'];
$memNick = $_POST['memNick'];
$memPhNum = $_POST['memPHNum'];
$memEmail = $_POST['memEmail'];


$sql = "
INSERT INTO `member`
SET regDate = NOW(),
updateDate = NOW(),
memId = '$memId',
memPW = '$memPW',
memName = '$memName',
memNick = '$memNick',
memPHNum = '$memPhNum',
memEmail = '$memEmail',
delStatus = FALSE,
`admin` =  FALSE;
";

DB_update($sql);


jsLocationReplaceExit('/index.php', "회원가입이 되었습니다.");
?>