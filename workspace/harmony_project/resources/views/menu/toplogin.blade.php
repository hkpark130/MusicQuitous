<div class="container back">
  <div class="row">
    
    <div class="col-md-9 imglogo ">
      <a href="{{ url('/') }}">
        <img id="logo" src="/img/logo3.png" alt="">
      </a>
    </div>
    <div class="col-md-3 topmenu ">
            <a href="https://harmony-project-chonahoom.c9users.io">Home</a>
          <?php
          $user_id = session()->get('user_id','');
          
          if(!empty($user_id[0])){
          ?>
            <a href="{{ url('/logoutAction') }}">Logout</a>
            {{csrf_field()}}
            <a href="{{ url('/myfriends') }}">Mypage</a>
          <?php
          }
          else{
          ?>
            <a href="{{ url('/login') }}">Login</a>
            {{csrf_field()}}
            <a href="{{ url('/store') }}">Register</a>
          <?php
          }
          ?>
    </div>
  </div>
</div>