<?php
require_once __DIR__ . '/head.php';
$pageTitle = "CodersCode";
?>

<?php if ( !isset($_SESSION['logonMember']) ) {?>
    <a href="/usr/member/login.php">로그인</a>
    <a href="/usr/member/join.php">회원가입</a>
<?php } ?>
    <?php if ( isset($_SESSION['logonMember']) ) {?>
    <a href="/usr/member/doLogout.php">로그아웃</a>
    <a href="/usr/member/modify.php">정보수정</a>
<?php } ?>

<div>
    <a href="/usr/member/join.php"><input type="button" value = "회원가입"></a>
    <a href="/usr/member/login.php"><input type="button" value = "로그인"></a>
    <a href="/usr/member/logout.php"><input type="button" value = "로그아웃"></a>
    <a href="/usr/member/modify.php"><input type="button" value = "수정"></a>
    <a href="/usr/member/doDelete.php"><input type="button" value = "탈퇴"></a>
    <a href="/usr/board/add.php"><input type="button" value ="게시판 생성"></a>
</div>

<?php
require_once __DIR__ . '/foot.php';
?>