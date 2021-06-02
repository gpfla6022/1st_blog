<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/webinit.php';
$pageTitle = "BOARD LIST";
require_once __DIR__ . '/../../head.php';

$sql = "
SELECT * 
FROM board 
ORDER BY board.id DESC;
";

$boards = DB_getRows($sql);

require_once __DIR__ . '/../../head.php';
?>
<section>
    <div>
    <h1>&lt;BOARD LIST&gt;</h1>
    <hr>
    <a href="add.php"><input type="button" value = "게시판 생성"></a><br>
    <hr>
        <?php foreach ($boards as $board) {?>
            게시판 번호 : <?=$board['id']?><br>
            게시판 이름 : <?=$board['name']?><br>
            게시판 코드 : <?=$board['boardCode']?><br>
            작성일 : <?=$board['regDate']?><br>
            갱신일 : <?=$board['updateDate']?><br>

            <a href="/usr/article/list.php?id=<?=$board['id']?>"><input type="button" value = "게시물 리스트"></a>
            <a href="/usr/board/doDelete.php?id=<?=$board['id']?>"><input type="button" value = "삭제"></a>
            <a href="/usr/board/modify.php?id=<?=$board['id']?>"><input type="button" value = "수정"></a>
            <hr>
        <?php }?>
    </div>
</section>
<?php 
require_once __DIR__ . "/../../foot.php"; ?>