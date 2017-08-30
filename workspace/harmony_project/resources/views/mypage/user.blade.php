<?php
  $page = count($userData); // 페이지 수
  
?>

<!DOCTYPE html>
<html>
  <head>
        <!-- 합쳐지고 최소화된 최신 CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    
    <!-- 부가적인 테마 -->
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">-->
    
    <!-- 합쳐지고 최소화된 최신 자바스크립트 -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
    <title></title>
    
    <style media="screen">
    @import url(http://fonts.googleapis.com/earlyaccess/nanumgothic.css);
      .button2 {
      	display: inline-block;
      	margin-top: 0px;
      	outline: none;
      	cursor: pointer;
      	text-align: center;
      	text-decoration: none;
      	font: 20px/100% Arial, Helvetica, sans-serif;
      	padding: .1em 1em .40em;
      	text-shadow: 0 1px 1px rgba(0,0,0,.3);
      	-webkit-border-radius: .5em; 
      	-moz-border-radius: .5em;
      	border-radius: .5em;
      	-webkit-box-shadow: 0 1px 2px rgba(0,0,0,.2);
      	-moz-box-shadow: 0 1px 2px rgba(0,0,0,.2);
      	box-shadow: 0 1px 2px rgba(0,0,0,.2);
      	margin-top: 50px;
      }
      .button2:hover {
      	text-decoration: none;
      }
      .button2:active {
      	position: relative;
      	top: 1px;
      }
  
  
    button{
      font-family: 'Nanum Gothic', serif;
      font-size: 20px;
      cursor:pointer;
    }
    
    
      .albumn_content {
        position: absolute;
        width: 1360px;
        height: 600px;
        border: 5px solid #7FC7AF;
        border-radius: 10px;
        margin:50px 0px 0px 20px;
        left: 15%;
        padding-right: 0px;
        display: inline-block;
      }
      
      
      .acontent {
        text-align:center;
        transition: 0.3s;
        width: 500px; height: 300px;
        display: inline-block;
        /*position: relative;*/
        /*margin-right: 73px;*/
        /*margin-bottom: 40px;*/
        margin: 45px 10px 20px 120px;
      }
      .acontent .album_image img {
        width: 100%;
        height: 100%;
      }
      
      
      .container {
        background-color: #7FC7AF;
        border: 1px solid;
        width: 150px;
        /*width:30px;*/
        /*height:30px;*/
      }

      .container p[title="content"]{
        font-size: 25px;
        display: inline;
        padding-left: 10%;
        font-family: 'Nanum Gothic', serif;
      }
      
      
      
    #pagination {
        position: absolute;
        top: 90%; left: 38%;
        list-style:none;
        float:left;
        display:inline;
    }
    
    
    #pagination li {
        float:left;
    }
    #pagination li a {
        float:left;
        padding:4px;
        margin-right:3px;
        width:27px;
        color: #000000;
        font:bold 14px tahoma;
        border:1px solid #665F65;
        text-align:center;
        text-decoration:none;
    }
    #pagination li a:hover, ul li a:focus {
        color:#fff;
        border:1px solid #f40;
        background-color:#f40;
    }
    #back{
        left:400px;
        top:400px;
    }
    #next{
      
    }
  </style>
  </head>
  <body>
    
    
    @include('menu.topmenu')
      <div class="albumn_content">
      
      <?php
      
        $page = ceil((count($userData) / 2)); 
        for($kCount = 0; $kCount <= 1; $kCount++) {
          
          /* 한 페이지 당 2개의 게시물이 보이도록 page 변수를 생성 */
          $pageData = ($now_page-1)*2;
          
          if($now_page == $page && $now_page % 2 == 1){
          
          ?>
          
          
          
          <div class="acontent">
            
            <a class='album_image' href='/recordbefore/{{$userData[$pageData + $kCount]->musicID}}'>
            <img src='/midi/{{$userData[$pageData + $kCount]->path}}/{{$userData[$pageData + $kCount]->img}}'>
            </a>
            
            <div class="container">
            <p title='content'>{{$userData[$pageData + $kCount]->subject}}</p><br/>
            <p title='content'>{{$userData[$pageData + $kCount]->instrument}}</p><br/>
            <p title='content'>{{$partici_name[$pageData + $kCount]}}</p><br/>
            <p title='content'>{{$userData[$pageData + $kCount]->created_at}}</p><br/>
            </div>
            
          </div>
          
          
          <?php 
        
            if($page % 2 == 1)
            break;
          } else {
          ?>
          <div class="acontent">
            <a class='album_image' href='/recordbefore/{{$userData[$pageData + $kCount]->musicID}}'>
            <img src='/midi/{{$userData[$pageData + $kCount]->path}}/{{$userData[$pageData + $kCount]->img}}'>
            </a>
            
            <div class="container">
            <p title='content'>{{$userData[$pageData + $kCount]->subject}}</p><br/>
            <p title='content'>{{$userData[$pageData + $kCount]->instrument}}</p><br/>
            <p title='content'>{{$partici_name[$pageData + $kCount]}}</p><br/>
            <p title='content'>{{$userData[$pageData + $kCount]->created_at}}</p><br/>
            </div>
          </div>
          <?php
          }
          
        }
      
      
      
      ?>
    
    
      
    
    
  <!--<ul class="pager">-->
  <!--  <li class="previous disabled"><a href="#"><span aria-hidden="true">&larr;</span> Older</a></li>-->
  <!--  <li class="next"><a href="#">Newer <span aria-hidden="true">&rarr;</span></a></li>-->
  <!--</ul>-->




       
    <!--<ul id="pagination">-->
    <ul class="pager">
  <button id="Back" type="button" class="button2" onClick="location.href='/matching/result;">뒤로가기</button>
  <?php
    // for($count = 1; $count <= $page; $count++){
    //   echo "<li><a href='/matching/user/{$user_id}/{$count}'>{$count}</a></li>";
    // }
    
    // echo "</br>";
    $back_page = $now_page - 1;
    $next_page = $now_page + 1;
    if($page == 1){
      echo "<li class = 'previous disabled'><a href='#'><img src='/images/prev.png' width='30px' height='30px'></a></li>";
      echo "<li class = 'next disabled'><a href='#'><img src='/images/next.png' width='30px' height='30px'></a></li>";
      // echo '<li class="previous disabled"><a href="#"><span aria-hidden="true">&larr;</span> Older</a></li>';
      // echo '<li class="next"><a href="#">Newer <span aria-hidden="true">&rarr;</span></a></li>';
    }
    else if($back_page == 0 && $page > 1){
      echo "<li class = 'previous disabled'><a href='#'><img src='/images/prev.png' width='30px' height='30px'></a></li>";
      echo "<li class = 'next'><a href='/matching/user/{$user_id}/{$next_page}'><img src='/images/next.png' width='30px' height='30px'></a></li>";
    }else if($now_page == $page){
      echo "<li class='previous'><a href='/matching/user/{$user_id}/{$back_page}'><img src='/images/prev.png' width='30px' height='30px'></a></li>";
      echo "<li class='next disabled'><a href='#'><img src='/images/next.png' width='30px' height='30px'></a></li>";
    }else{
      echo "<li class='previous'><a href='/matching/user/{$user_id}/{$back_page}'><img src='/images/prev.png' width='30px' height='30px' ></a></li>";
      echo "<li class='next'><a href='/matching/user/{$user_id}/{$next_page}'><img src='/images/next.png' width='30px' height='30px'></a></li>";
    }
  ?>
</ul>

<script type="text/javascript">

      if(document.getElementById('back') !== null && document.getElementById('next') !== null) {
        document.getElementById('back').style.visibility = 'hidden'; 
        document.getElementById('next').style.visibility = 'hidden'; 
      }else if(document.getElementById('next') !== null){
        document.getElementById('next').style.visibility = 'hidden'; 
      }else if(document.getElementById('back') !== null){
      document.getElementById('back').style.visibility = 'hidden';
      }
      
    </script>
  </body>
</html>