<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/webinit.php';

$pageTitle = "BOARD MODIFY";

$id = $_GET['id']; 

?>

<?=$pageTitle = "게시판 수정";?>
<?php require_once __DIR__ . "/../../head.php";?>
<div>
<h1>&lt;BOARD MODIFY&gt;</h1>
    <hr>
    <form method = "POST" action="doModify.php">
        <input type="hidden" name="id" value = "<?=$id?>">
        <p>게시판 이름 : <input type="text" name = "name"></p>
        <p>게시판 코드 : <input type="text" name = "boardCode"></p>
        <input type="submit" value = "확인">
    </form>
</div>
<?php require_once __DIR__ . "/../../foot.php"; ?>
