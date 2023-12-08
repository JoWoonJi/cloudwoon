<?php
session_start();
include('db.php');

if(isset($_GET['user_id']) && isset($_GET['pass1']))
{
    //시큐어코딩
   $user_id = mysqli_real_escape_string($db, $_GET['user_id']);
   $pass1 = mysqli_real_escape_string($db, $_GET['pass1']);
   

   // 에러 체크

   if(empty($user_id))
   {
        header("location: login_view.php?error=아이디가 비어있어요");
        exit();
   }
   else if(empty($pass1))
   {
        header("location: login_view.php?error=비밀번호가 비어있어요");
        exit();
   }
   else
   {
          $sql = "select * from users where username = '$user_id'";
          $result = mysqli_query($db, $sql);

          if(mysqli_num_rows($result) === 1)
          {
            // 배열의 형태로 가져온다
            $row = mysqli_fetch_assoc($result);
            $hash = $row['password'];

            if(password_verify($pass1, $hash))
            {
                $_SESSION['username'] = $row['username'];
                $_SESSION['nick'] = $row['nick'];
                $_SESSION['no'] = $row['no'];

                header("location: mypage/mypage.php");
                exit();
            }
            else
            {
                header("location: login_view.php?error=로그인에 실패하였습니다");
                exit();
            }
           
           }
    else
    {
        header("location: login_view.php?error=아이디가 잘못 입력되었습니다");
        exit();
    }
    }
}
else
{
    header("location: login_view.php?error=알 수 없는 오류가 발생하였습니다");
    exit();
}


?>