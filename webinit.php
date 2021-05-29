<?php
# 모든 파일에 들어가야 하는 공통사항

# 로그인 세션
session_start();

# Util 사용
require_once __DIR__ . "/util.php";

# DB 연결
$dbConn = mysqli_connect("127.0.0.1", "happy", "123456", "1st_blog") or die ("DB CONNECTION ERROR");
?>