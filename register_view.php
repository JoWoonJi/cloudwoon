<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>

    <!--스타일시트-->
    <!--<link rel="stylesheet" type="text/css" href="css/join_black.css">-->
    <link rel="stylesheet" type="text/css" href="css/join.css">
</head>
<body>

    <form action="register_server.php" method="post">
    <h2>회원가입</h2>

    <?php if(isset($_Get['error'])) { ?>
    <p class="error"><?php echo $_Get['error']; ?></p>
    <?php } ?>

    <?php if(isset($_Get['success'])) { ?>
    <p class="success"><?php echo $_Get['success']; ?></p>
    <?php } ?>

    <label>아이디</label>
    <input type="text" placeholder="아이디..." name="user_id">

    <label>닉네임</label>
    <input type="text" placeholder="닉네임..." name="user_nick">

    <label>비밀번호</label>
    <input type="password" placeholder="비밀번호..." name="pass1">

    <label>비밀번호 확인</label>
    <input type="password" placeholder="비밀번호..." name="pass2">

    <button type="submit">저장</button>
    <a href="login_view.php" class="save">이미 회원이신가요? (로그인 페이지)</a>
    
    </form>
</body>
</html>