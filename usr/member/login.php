<?= 
require_once $_SERVER['DOCUMENT_ROOT'] . '/webinit.php'; 
?>

<?php require_once __DIR__ . "/../../head.php";?>


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
<?php require_once __DIR__ . "/../../foot.php"; ?>