<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/webinit.php';

$pageTitle = "ARTICLE MODIFY";

require_once __DIR__ . "/../../head.php";

$id = $_GET['id'];
?>
<div>
<h1>&lt;ARTICLE MODIFY&gt;</h1>
    <hr>
    <form method = "POST" action="doModify.php">
        <input type="hidden" name="id" value = "<?=$id?>">
        <p>제목 : <input type="text" name = "title"></p>
        <p>내용 : </p>
        <textarea name="body" cols="30" rows="10"></textarea>
        <input type="submit" value = "확인">
    </form>
</div>
<?php require_once __DIR__ . "/../../foot.php"; ?>