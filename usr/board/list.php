<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/webinit.php';

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
        <a href="/index.php"><input type="button" value="메인으로 돌아가기"></a>
        <hr>
        <div>
            <?php foreach($boards as $board) {?>
            게시판 번호 : <?=$board['id']?><br>
            게시판 이름 : <?=$board['name']?><br>
            게시판 코드 : <?=$board['boardCode']?><br>
            작성일 : <?=$board['regDate']?><br>
            갱신일 : <?=$board['updateDate']?><br>
            <a href="/../article/list.php?id=<?=$board['id']?>"><input type="button" value = "게시물 리스트"></a>
            <a href="/../board/doDelete.php?id=<?=$board['id']?>"><input type="button" value = "삭제"></a>
            <a href="/../board/modify.php?id=<?=$board['id']?>"><input type="button" value = "수정"></a>
            <hr>
        <?php }?>
    </div>
</section>
<?php 
require_once __DIR__ . "/../../foot.php"; ?>