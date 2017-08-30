<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <script src="/js/jquery-3.2.1.min.js"></script>
  <style type="text/css">
    .align_box1{
      width:100%;
    }
    .user_view{
      width:500px;
      height:600px;
      padding-top:30px;
      margin:50px auto;
      border:1px solid  #ddd;
      text-align:center;
      float:left;
    }
    .login_form{
      width:500px;
      margin:190px auto;
      padding:50px;
      border:1px solid black;
    }
    .button_align{
      width:200px;
      margin:50px auto;
      text-align:center;
    }
    .user_view<img{
      width:200px;
      height:200px;
    }
    #friendform{
      width:500px;
      height:600px;
      border: 1px solid #ddd; /* Add a grey border */
      font-size: 20px; /* Increase font-size */
      text-align:center;
      padding-top:30px;
      float:left;
      margin:50px auto;

    }
  </style>
  <body>

<div class="top">
  @include('menu.topmenu')
</div>
<div class="align_box1">
<?php
$user_id = session()->get('user_id','');
$usernick = DB::table('users')->where('user_id',$user_id)->select('nick')->get();
$userimg = DB::table('users')->where('user_id', $user_id)->select('userImage')->get();

if(!empty($usernick||$userimg)){
  if(!empty($user_id[0])){
  ?>
  
    <div class="user_view">
      <img src='../img/<?php echo $userimg[0]->userImage; ?>' style="width:300px;"></img><br/>
      <h2><strong><?php echo $usernick[0]->nick; ?></strong> 님 어서오세요!</h2>
      <form class='' action='/logoutAction' method='post'>
      <input type='submit' value=로그아웃>
      {{csrf_field()}}
      </form>
    </div>
  <?php
  }
else { 
 ?>
      <form class='login_form' action='/loginAction' method='post'>
          아이디:<input type='text' name='user_id' ><br>
          비밀번호: <input type='Password' name='password' ><br>
          <div class='button_align'>
          <input type='submit' value='로그인'>
          <input type='button' value='회원가입' onclick=location.href='store';>
          </div>
         {{csrf_field()}}
      </form>
<?php
  }
}
?>

    </div>
  </body>
</html>