<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/webinit.php';
# $_SERVER['DOCUMENT_ROOT'] => htdocs, '/webinit.php' 은 htdocs에 들어있으므로 나갈필요 없음.

$memberId = $_SERVER['logonmember'];

$memPW = $_POST['memPW'];
$memNick = $_POST['memNick'];
$memPhNum = $_POST['memPHNum'];
$memEmail = $_POST['memEmail'];


$sql = "
update `member`
SET updateDate = NOW(),
memPW = '$memPW',
memNick = '$memNick',
memPHNum = '$memPhNum',
memEmail = '$memEmail',
where id = $memberId;
";

DB_update($sql);


jsLocationReplaceExit('/index.php', "회원수정이 되었습니다.");
?>