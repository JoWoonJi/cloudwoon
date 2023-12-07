<?php
  // 데이터베이스 연결 설정
  $db_host = "localhost";
  $db_user = "root";
  $db_password = "1357";
  $db_name = "my_database";

  // 데이터베이스 연결
  $db = mysqli_connect($db_host, $db_user, $db_password, $db_name);

  if(!$db)
  {
    echo "DB접속 실패";
  }
  else
  {
    echo "db접속 성공";
  }
/*
  // 사용자 이름과 비밀번호 가져오기
  $username = $_GET["username"];
  $password = $_GET["password"];

  // 사용자 이름과 비밀번호로 사용자 검색
  $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
  $result = mysqli_query($conn, $sql);

  // 사용자를 찾으면
  if (mysqli_num_rows($result) > 0) {
    // 사용자를 인증된 사용자로 표시
    $_SESSION["is_authenticated"] = true;

    // 로그인 성공 페이지로 이동
    header("Location: login_success.php");
  } else {
    // 로그인 실패 페이지로 이동
    header("Location: login_fail.php");
  }

*/
?>