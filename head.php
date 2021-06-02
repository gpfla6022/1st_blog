<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/dropdown.css">
    <script src ="bn.js" ></script>
    <title><?=$pageTitle?></title>
</head>
<body>
<header class="top-bar inline-grid">
  <!-- 로고 공간 -->
  <div>
    <!-- 로고 -->
    <a href="/index.php" class="top-bar__logo block">
      <span>
        CodersCode
      </span>
    </a>
  </div>

  <!-- 빈 공간 -->
  <div></div>
  
  <!-- 메뉴 공간 -->
  <div class="inline-grid text-right">
    
    <!-- 메뉴 -->
    <nav class="top-bar__menu-box-1">
      <ul class="inline-grid">
        <li>
          <a href="/index.php">
            <span>HOME</span>
          </a>
        </li>
        <li>
          <a href="#">
            <span>ABOUT ME</span>
          </a>
          <ul>
            <li>
              <?php if ( isset($_SESSION['logonMember']) ) {?>
              <a href="/usr/member/modify.php">정보수정</a>
              <?php } ?>
              <?php if ( !isset($_SESSION['logonMember']) ) {?>
                <a href="/usr/member/login.php">로그인</a>
              <?php } ?>
            </li>
            <li>
              <a href="#">
                <span>내 게시물</span>
              </a>
            </li>
            <li>
              <a href="/usr/member/logout.php">
                <span>로그아웃</span>
              </a>
            </li>
            
          </ul>
        </li>
      </ul>
    </nav>
  </div>
  
</header>
</body>



 