<?php 
require_once $_SERVER['DOCUMENT_ROOT'] . '/webinit.php'; 

$pageTitle = "ARTICLE WRITE";

require_once __DIR__ . "/../../head.php";

$boardIndex = $_GET['boardId'];

?>

<div>
    <h1>ARTICLE WRITE</h1>
    <hr>
    <form method = "POST" action="doWrite.php">
        <p>제목 : <input required type="text" name = "title"></p>
        <p>내용 : </p>
        <textarea required name="body" cols="30" rows="10"></textarea>
        <input type="hidden" name="boardIndex" value="<?=$boardIndex?>">
        <input type="submit" value = "확인">
    </form>
</div>
<?php require_once __DIR__ . "/../../foot.php"; ?>