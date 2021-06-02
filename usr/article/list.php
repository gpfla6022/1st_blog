<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/webinit.php';
$pageTitle = "ARTICLE LIST";
require_once __DIR__ . "/../../head.php";
 
$sql = "
SELECT * 
FROM article 
ORDER BY article.id DESC;
";

$articles = DB_getRows($sql);
$boardIndex = $_GET['id'];


$boardsql = "
SELECT * 
FROM board
WHERE id = $boardIndex;
";

$board = DB_getRow($boardsql);
?>

<hr>
<div>
<h1>&lt;ARTICLE LIST&gt;</h1>
    <hr>
    <a href="write.php?boardId=<?=$boardIndex?>"><input type="button" value = "게시물 작성"></a>
    <a href="/usr/board/list.php"><input type="button" value = "게시판으로 돌아가기"></a>
    <hr>
    <?php foreach($articles as $article) {?>
    <?php if($board['id'] == $article['boardIndex']) { ?><br>
        게시판 번호 : <?=$board['id']?><br>
        번호 : <?=$article['id']?><br>
        제목 : <?=$article['title']?><br>
        작성일 : <?=$article['regDate']?><br>
        갱신일 : <?=$article['updateDate']?><br>
        <a href="detail.php?id=<?=$article['id']?>"><input type="button" value = "상세보기"></a>
        <hr>
    <?php }?>
    <?php }?>
</div>
<?php require_once __DIR__ . "/../../foot.php"; ?>