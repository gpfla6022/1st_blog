<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/webinit.php';

$pageTitle = "회원가입";

require_once __DIR__ . '/../../head.php';

$pageTitle = "MEMBER JOIN";

$path = '/../../index.php';

if(isset($_SESSION['logonmember'])){
    jsLocationReplaceExit($path, "이미 로그인이 된 상태입니다.");
}
?>
<div>
<h1>&lt;MEMBER JOIN&gt;</h1>
    <hr>
    <form method = "POST" action="doJoin.php">
        <table>
            <tr>
                <td>아이디</td>
                <td><input type="text" name="memId"></td>
            </tr>
            <tr>
                <td>비밀번호</td>
                <td><input type="text" name="memPW"></td>
            </tr>
            <tr>
                <td>이름</td>
                <td><input type="text" name="memName"></td>
            </tr>
            <tr>
                <td>별명</td>
                <td><input type="text" name="memNick"></td>
            </tr>
            <tr>
                <td>전화번호</td>
                <td><input type="text" name="memPHNum"></td>
            </tr>
            <tr>
                <td>이메일</td>
                <td><input type="text" name="memEmail"></td>
            </tr>
        </table>
        <input type="submit" value="확인">
    </form>
</div>

<?php
require_once __DIR__ . '/../../foot.php';
?>