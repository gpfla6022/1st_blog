<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/webinit.php';

$memId = $_POST['memId'];
$memPW = $_POST['memPW'];

$sql = "
SELECT * 
FROM `member` 
WHERE `memId` = '$memId'
";

$member = DB_getRow($sql);

if( empty ($member)) {
    echo "존재하지 않는 회원입니다.";
    exit;
}

if( $member['memPW'] != $memPW) {
    echo "비밀번호가 일치하지 않습니다.";
    exit;
}

$_SESSION['logonMember'] = $member['id'];


jsLocationReplaceExit("/index.php", "로그인이 되었습니다.")
?>


