<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/webinit.php';
$pageTitle = "REPLY MODIFY";

$id = $_GET['id']; # 댓글번호
$relId = $_GET['relId']; # 게시글번호

?>


<?php require_once __DIR__ . "/../../head.php";?>

<form method = "POST" action="doModify.php">
    <input type="hidden" name="id" value = "<?=$id?>">
    <input type="hidden" name="relId" value = "<?=$relId?>">
    <p>댓글 : <input type="text" name = "body"></p>
    <input type="submit" value = "확인">
</form>

<?php require_once __DIR__ . "/../../foot.php"; ?>
