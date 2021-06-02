<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/webinit.php';

$pageTitle = "ARTICLE DETAIL";

require_once __DIR__ . "/../../head.php";

$id = $_GET['id'];

$articleId = getIntValueOr($_GET['id'], 0);

#if($article == 0){
#    jsHistoryBackExit("게시물 번호를 입력해 주세요");
#}

$sql = "
SELECT *  
FROM article 
WHERE article.id = $articleId;
";

$article = DB_getRow($sql);

#if($article == 0){
 #   jsHistoryBackExit("${articleId}번 게시물이 존재하지 않습니다.");
#}

$replySql = "
SELECT * 
FROM `reply` 
ORDER BY `id` DESC;
";

$replies = DB_getRows($replySql);
?>

<div>
<h1>&lt;ARTICLE DETAIL&gt;</h1>
    <hr>
    <p>게시판 번호 : <?=$article['id']?></p>
    <p>제목 : <?=$article['title']?></p>
    <p>내용 : <?=$article['body']?></p>
    <p>작성일 : <?=$article['regDate']?></p>
    <p>수정일 : <?=$article['updateDate']?></p>
    <a href="list.php?id=<?=$article['boardIndex']?>"><input type="button" value = "리스트로 돌아가기"></a>
    <a href="doDelete.php?id=<?=$article['id']?>"><input type="button" value = "삭제"></a>
    <a href="modify.php?id=<?=$article['id']?>"><input type="button" value = "수정"></a>
    <hr>
</div>
    <h1>&lt;REPLY&gt;</h1>
    <hr>
<div>
    <form method="POST" action="/usr/reply/doWrite.php">
        <input type="hidden" name="relId" value="<?=$article['id']?>">
        <input type="hidden" name="relTypeCode" value="article">
        <input type="text" name="body">
        <input type="submit" value="작성">
    </form>
    <hr>
    <?php foreach( $replies as $reply) { ?>
        <?php if ($reply['relId'] == $article['id']) { ?>
            <div id = "reply">
                <?=$reply['id']?>번 댓글 : <?=$reply['body']?>
                    <a href="../reply/doDelete.php?id=<?=$reply['id']?>&relId=<?=$reply['relId']?>"><input type="button" value="삭제"></a>
                    <a href="../reply/Modify.php?id=<?=$reply['id']?>&relId=<?=$reply['relId']?>"><input type="button" value="수정"></a>
            </div>
        <?php }?>
    <?php }?>
</div>

<?php require_once __DIR__ . "/../../foot.php"?>