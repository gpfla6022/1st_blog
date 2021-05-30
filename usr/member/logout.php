<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/webinit.php';

$pageTitle = "MEMBER LOGOUT";

if(!isset($_SESSION['logonmember'])){
    jsLocationReplaceExit('login.php', "이미 로그아웃이 되었습니다.");
}

if(isset($_SESSION['logonmember'])){
    session_unset();
}

jsLocationReplaceExit("/../index.php", "로그아웃이 되었습니다.");
?>