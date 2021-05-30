<?= 
require_once $_SERVER['DOCUMENT_ROOT'] . '/webinit.php'; 

$pageTitle = "MEMBER LOGIN";

require_once __DIR__ . "/../../head.php";
 
?>

<div>
<h1>&lt;MEMBER LOGIN&gt;</h1>
    <hr>
    <form method = "POST" action="doLogin.php">
        <table>
            <tr>
                <td>아이디</td>
                <td><input required type="text" name = "memId"></td>
            </tr>
            <tr>
                <td>비밀번호</td>
                <td><input required type="password" name ="memPW"></td>
            </tr>
        </table>
        <input type="submit" value = "확인">
    </form>
</div>
<?php require_once __DIR__ . "/../../foot.php"; ?>