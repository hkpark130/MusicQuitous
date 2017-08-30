
<!DOCTYPE html>
<html>
<head>
  <!--
  |*************************************************************************************
  |링크 뒤에 붙어있는  ?var=<?//=filemtime('파일경로');?>는 css,js의 수정내용이 바로바로 적용되게 하기 위함.
  |*************************************************************************************
   -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
  <!-- 합쳐지고 최소화된 최신 CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    
    <!-- 부가적인 테마 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
    
    <!-- 합쳐지고 최소화된 최신 자바스크립트 -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=550, initial-scale=1">
  <style>
  @import url(http://fonts.googleapis.com/earlyaccess/nanumgothic.css);
  body{
    background-color: #1F8A70;
    background-image:url('/img/mainimg.jpg');
  }
  
  
  /*#centerText{*/
  /*  font-size: 30px;*/
  /*  position: absolute;*/
  /*  top: 350px; left: 500px;*/
  /*}*/
  /*#centerText p{*/
  /*  display: inline;*/
  /*  font-size: 250px;*/
  /*}*/
  
  .menu a:link { color: blue; text-decoration: none;}
  .menu a:visited { color: white; text-decoration: none;}
  .menu > a:hover{
    color: lime;
  }

  .smalltitle{
    text-align:center;
    color:white;
    font-size:23px;
  }
  .bigtitle{
    text-align:center;
    color:white;
    font-size:70px;
    font-family: 'Nanum Gothic', serif;
  }
  .maintitle{
    position:absolute;
    top:50%;
    width:100%;
  }
  .buttontitle{
    margin-top:20px;
    text-align:center;
  }
  .buttontitle button{
    border:none;
    background-color:#7FC7AF;
    color:white;
    padding:5px 20px;
    border-radius:30px;
  }
  </style>
</head>
<body>
  <!--
  |**************************************************************************
  | 페이지로고/상단우측메뉴/주메뉴 표시 view/menu/topmenu.blade.php
  |**************************************************************************
   -->
  <nav class="navbar navbar-inverse">
    @include('menu.topmenu')
    
  </nav>
  <div class="container maintitle ">
    <div class="row">
      <div class="col-md-12 smalltitle ">
        같이 합주할 사람이 없다고?
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 bigtitle ">
        <strong>MQ하자!</strong>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 buttontitle text-center">
        <button>
          합주하러 가기 →
        </button>
      </div>
    </div>
  </div>
</body>
</html>
