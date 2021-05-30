<?php
# 초기화
require_once $_SERVER['DOCUMENT_ROOT'] . '/webinit.php';

require_once __DIR__ . '/../../head.php';

?>
<section>
    <div>
        <a href="/index.php"><input type="button" value="메인으로 돌아가기"></a>
        <hr>
    </div>
    <div>
    <h1>&lt;BOARD ADD&gt;</h1>
    <hr>
        <form method="POST" action="doAdd.php">
            <table>
                <tr>
                    <td>게시판 이름</td>
                    <td><input required type="text" name="name"></td>
                </tr>
                <tr>
                    <td>게시판 코드</td>
                    <td><input required type="text" name="boardCode"></td>
                </tr>
            </table>
            <a href="list.php"><input type="submit" value="확인"></a>
        </form>
    </div>
</section>

<?php require_once __DIR__."/../../foot.php"; ?>