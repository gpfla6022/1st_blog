<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/webinit.php';

$pageTitle = "MEMBER MODIFY";

require_once __DIR__ . '/../../head.php';

?>
<div>
<h1>&lt;MEMBER MODIFY&gt;</h1>
    <hr>
    <form method = "POST" action="doModify.php">
        <table>
            <tr>
                <td>비밀번호</td>
                <td><input type="text" name="memPW"></td>
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