<?php
if(!isset($_SESSION['logonMember']) ){
    jsLocationReplaceExit("/usr/member/login.php", "로그인 후 이용해 주시기 바랍니다.")
}
?>