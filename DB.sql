GRANT ALL PRIVILEGES
ON *.*
TO `happy`@`%`
IDENTIFIED BY '123456';


DROP DATABASE IF EXISTS `1st_blog`;
CREATE DATABASE `1st_blog`;
USE `1st_blog`;

SHOW TABLES;  


CREATE TABLE `member`(
    id INT(10) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
    regDate DATETIME NOT NULL, 
    updateDate DATETIME NOT NULL,
    memId CHAR(20) NOT NULL,
    memPW CHAR(100) NOT NULL,
    memName CHAR(20) NOT NULL,
    memNick CHAR(20) NOT NULL, 
    memPHNum CHAR(20) NOT NULL,
    memEmail CHAR(100) NOT NULL,
    delStatus BOOL NOT NULL,
    `admin` BOOL NOT NULL
);

INSERT INTO `member`
SET regDate = NOW(),
updateDate = NOW(),
memId = 'admin',
memPW = '1234',
memName = '관리자',
memNick = '관리자',
memPHNum = '01000000000',
memEmail = 'admin@admin.com',
delStatus = FALSE,
`admin` =  TRUE;

INSERT INTO `member`
SET regDate = NOW(),
updateDate = NOW(),
memId = 'user1',
memPW = '1234',
memName = '김또치',
memNick = 'User1',
memPHNum = '01011111111',
memEmail = 'user1@test.com',
delStatus = FALSE,
`admin` =  FALSE;

SELECT * FROM `member`;

CREATE TABLE board(
    id INT(20) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `name` CHAR(20) NOT NULL,
    boardCode CHAR(20) NOT NULL,
    regDate DATETIME NOT NULL,
    updateDate DATETIME NOT NULL
);

SELECT * FROM board;

INSERT INTO board 
SET `name` = '공지',
boardCode = 'notice',
regDate = NOW(),
updateDate = NOW();

INSERT INTO board 
SET `name` = '자유',
boardCode = 'free',
regDate = NOW(),
updateDate = NOW();


CREATE TABLE article(
    id INT(10) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
    title CHAR(100) NOT NULL,
    `body` TEXT NOT NULL,
    regDate DATETIME NOT NULL,
    updateDate DATETIME NOT NULL,
    memId INT(10) UNSIGNED NOT NULL,
    boardIndex INT(10) UNSIGNED NOT NULL
);


SELECT * FROM article;


CREATE TABLE reply (
    id INT(20) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
    relId INT(30) UNSIGNED NOT NULL,
    `body` TEXT NOT NULL,
    relTypeCode CHAR(20) NOT NULL,
    regDate DATETIME NOT NULL,
    updateDate DATETIME NOT NULL
);

SELECT * FROM reply;


<div>
    <a href="/usr/member/join.php"><input type="button" value = "회원가입"></a>
    <a href="/usr/member/login.php"><input type="button" value = "로그인"></a>
    <a href="/usr/member/logout.php"><input type="button" value = "로그아웃"></a>
    <a href="/usr/member/modify.php"><input type="button" value = "수정"></a>
    <a href="/usr/member/doDelete.php"><input type="button" value = "탈퇴"></a>
    <a href="/usr/board/add.php"><input type="button" value ="게시판 생성"></a>
</div>