<?php

# 초기화 
require_once $_SERVER['DOCUMENT_ROOT'] . '/webinit.php';

# 회원번호 색인
$id = $_SESSION['logonMember'];

# 쿼리
$sql = "
UPDATE `member`
SET `regDate` = '',
`updateDate` = '',
`memId` = '',
`memPW` = '',
`memEmail` = '',
`memName` = '',
`memNick` = '',
`memPHNum` = '',
`delStatus` = True,
WHERE `id` = $id
";

DB__delete($sql);

session_unset();

jsLocationReplaceExit('/index.php', "회원 탈퇴가 되었습니다.")

?>
