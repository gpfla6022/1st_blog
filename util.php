<?php

# # DB에서 특정 정보만 수집
function DB_getRow($sql){
    global $dbConn;
    
    $rs = mysqli_query($dbConn, $sql);
    $row = mysqli_fetch_assoc($rs);

    return $row;
}
# DB에서 테이블 정보를 모두 수집
function DB_getRows($sql){
    global $dbConn;
    $rs = mysqli_query($dbConn, $sql);
    
    $rows = [];

    while($row = mysqli_fetch_assoc($rs)){
        $rows[] = $row;
    }

    return $rows;
}
# 생성해서 넣어주고 추가된 열의 인덱스를 리턴해줌
function DB_insert($sql){
    global $dbConn;
    mysqli_query($dbConn, $sql);

    return mysqli_insert_id($dbConn);
}
# 수정해서 넣어주고 추가된 열의 인덱스를 리턴해줌
function DB_update($sql){
    global $dbConn;
    mysqli_query($dbConn, $sql);
}
# 삭제해서 넣어주고 추가된 열의 인덱스를 리턴해줌
function DB_delete($sql){
    global $dbConn;
    mysqli_query($dbConn, $sql);
}

function DB_modify($sql){
    global $dbConn;
    mysqli_query($dbConn, $sql);
}
# 경고창 띄우기 
function jsAlert($msg) {
    echo "<script>";
    echo"alert('$msg')";
    echo "</script>";
}
# 경고창 출력 후 특정 경로로 돌려보내기(예)글을 쓰고 경고창 보내고 디테일로 보내기 )
function jsLocationReplaceExit($url, $msg = null) {
    if ( $msg ) {
        jsAlert($msg);
    }
    echo "<script>";
    echo"location.replace('$url')";
    echo "</script>";
    exit;
}
# 경고창 출력 후 이전 페이지로 이동
function jsHistoryBackExit($msg = null) {
    if ( $msg ) {
        jsAlert($msg);
    }
    echo "<script>";
    echo"history.back()";
    echo "</script>";
    exit;
}

function getIntValueOr($value, $defaultValue){
    if( isset($value) ){
        return intval($value);
    }
    return $defaultValue;
}

function getStringValueOr($value, $defaultValue){
    if( isset($value) ){
        return strval($value);
    }
    return $defaultValue;
}

?>