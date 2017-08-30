<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/earlyaccess/hanna.css">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <!-- 합쳐지고 최소화된 최신 CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    
    <!-- 부가적인 테마 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
    
    <!-- 합쳐지고 최소화된 최신 자바스크립트 -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <style media="screen">
    @import url(http://fonts.googleapis.com/earlyaccess/nanumgothic.css);
    @import url(http://fonts.googleapis.com/earlyaccess/notosanskr.css);
    @import url(http://fonts.googleapis.com/earlyaccess/nanumgothic.css);
/*
|**************************************************************************
| 앨범 이미지와 설명이 들어간 div박스의 CSS
|**************************************************************************
*/
      #ablums{
        font-family: 'Nanum Gothic', serif;
        /*font-weight: 600;*/
        font-size: 20px;
        color: #000000;
        text-shadow: 0 1px 1px rgba(0, 0, 0, 0.9);
        text-transform: uppercase;
        text-align: center;
        margin: 30px 0 50px 57px;
        padding-bottom: 10px;
        float:left;
        width:150px; height:150px;
        border:2px solid #7FC7AF;
        border-radius: 10px;
      }
      #album_Main{
        overflow-y:scroll;
        border-radius: 18px;
        margin: 20px 0 0 70px;
        border:5px solid #7FC7AF;
        width: 900px; height: 500px;
        /*overflow:hidden;*/
      }
      #main{
        border-radius: 10px;
        font-family: 'Nanum Gothic', serif;
      }
/*
|**************************************************************************
| 스크롤의 css를 지정해준다.
|**************************************************************************
  /*익스플로우 용 스크롤바*/
  html { scrollbar-arrow-color: #efefef;
        scrollbar-Track-Color: #efefef; 
        scrollbar-base-color: #dfdfdf;
        scrollbar-Face-Color: #dfdfdf;
        scrollbar-3dLight-Color: #dfdfdf;         
        scrollbar-DarkShadow-Color: #dfdfdf;
        scrollbar-Highlight-Color: #dfdfdf;
        scrollbar-Shadow-Color: #dfdfdf}
  
  /*크롬용 스크롤바*/
  ::-webkit-scrollbar {width: 12px; height: 12px;  }
  ::-webkit-scrollbar-button:start:decrement, 
  ::-webkit-scrollbar-button:end:increment {display: block; width: 12px;height: 12px; background: url() rgba(0,0,0,.05);}
  ::-webkit-scrollbar-track {     background: rgba(0,0,0,.05); }
  ::-webkit-scrollbar-thumb {  background: rgba(0,0,0,.1);  }
/*
|**************************************************************************
| 나만의 앨범 글자의 위치
|**************************************************************************
*/
      #ablumtitle{
        display: inline-block;
        margin-left: 450px;
      }


/*| Plus의 이미지와 텍스트 위치 css*/


      #plus{
        /*padding-top:-250px;*/
        /*display: inline;*/
        /*width: 170px; height: 170px;*/
        /*margin-left: 1000px;*/
        /*margin-top: -550px; */
        /*position: absolute;*/
        /*top: 925px; left: 1040px;*/
        margin-bottom: 70px;
        margin-left: 20px;
      }
      #plusText{
        font-family: 'Nanum Gothic', serif;
        font-size: 30px;
        position: absolute;
        top: 710px; left: 1035px;
      }


/*  뒤로가기 버튼 css*/


      #back{
        font-family: 'Nanum Gothic', serif;
      }
      
      
      
/*/////////////////////////////////////////////////////////////////////////*/
    ul.mylist, ol.mylist {
          list-style: none;
          margin: 0px;
          padding: 0px;  
          max-width: 100%;
          width: 100%;
          height:100%;
          border: 1px solid #E3E3E3;
          background-color: #E3E3E3;
        }
  
    ul.mylist li, ol.mylist li {
         display: inline-block;
         padding: 10px;
         margin-bottom: 5px;
         border: 1px solid #E3E3E3;
         font-size: 12px;
         cursor: pointer;
         margin: 5px 3px 5px 1px;
        }
        
    ul.mylist li,
    ol.mylist li {
        -webkit-transition: background-color 0.3s linear;
        -moz-transition: background-color 0.3s linear;
        -ms-transition: background-color 0.3s linear;
        -o-transition: background-color 0.3s linear;
        transition: background-color 0.3s linear;
    }
  
    ul.mylist li:hover,
    ol.mylist li:hover {
       background-color: #f6f6f6;
    }
    .go{
        /*border: 1px solid #E3E3E3;*/
        /*border:3px solid #000000;*/
          margin: -20px 32px 0px 0px;
    /*white-space:nowrap;*/
    /*overflow:hidden; */
    /*text-overflow:ellipsis; */
    }
    .go p{
      margin-top: 0px;
    }
    .mylist img{
        margin: 2px 2px -1px 2px;
        border: 1px solid  White;
        padding: 3px 3px 3px 3px;
    }
    #Latest{
        margin: 5px 0px 20px 10px;
        text-align:center;
        font-size:30px;
        font-family: 'Nanum Gothic', serif;
    }
/*/////////////////////////////////////////////////////////////////////////*/

  
    li a:link { color: black; text-decoration: none; }
    li a:visited { color: black; text-decoration: none;}
    
    /* 타이틀 */
    p{
      text-align:center;
      font-size:20px;
      /*font-family: 'Nanum Gothic', serif;*/
      font-family: 'Noto Sans KR', sans-serif;
    }
    
    #introduce{
      padding-bottom: 50px;
      margin-bottom: 50px;
      width: 200px; height: 200px;
    }
    #albumlist{
      border: 1px solid #7FC7AF;
      width: 1165px; height: 380px;
      margin-left: 50px;
      padding: 25px 0px 0px 5px;
      overflow: auto;
    }
    .groud{
      /*border: 1px solid #000000;*/
      height: 35px;
      background-color: #7FC7AF;
    }
    .titlebox{
      text-align:center;
      font-size:15px;
      /*font-family: 'Nanum Gothic', serif;*/
      font-family: 'Nanum Gothic', serif;
      width: 157px;
      white-space:nowrap;
      overflow:hidden; 
      text-overflow:ellipsis; 
    }
    #footer{
      margin-bottom : 0.5%;
      
    }
    
    #footer_text{
      font-family: 'Nanum Gothic', serif;
      font-size: 10px;
      
    }
    </style>
  </head>
  <body>
    <header class="navbar navbar-inverse">
      @include('menu.topmenu')
    </header>
    
   
   
   
    <!-- <nav> -->
    
    <ul class="mylist">
      <p id="Latest">개인 앨범</p>
      <!--<div id="introduce"></div>-->
     
     <div class="row">
     <div class="col-md-8" id="albumlist">
      <?php
      foreach ($myAlbum as $myAlbums) {
        echo "<li>
          <a href ='/myPage/album/record/list/{$user_id}/{$myAlbums['album_number']}'>
          <div class='go' >
            <img src='/albumImages/{$myAlbums['album_picture']}' width='150' height='150';>
          <div class='titlebox'>{$myAlbums['album_title']}</div>
          </div>
          </a>
        
      </li>";
      }
     ?>
     <li>
     <form class="" action="/myPage/album/add" method="get">
        <input id="plus" type="image" src="/img/plus-button.png" value="앨범추가" width="100" height="100">
     </form>
     </li>
     </div>
     </div>
    </ul>
    
    
    <!--<div class="groud">-->
    <!--  안녕하세요.안녕하세요.안녕하세요.안녕하세요.안녕하세요.안녕하세요.안녕하세요.-->
    <!--</div>-->
     <!--</nav> -->
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
     
     <!--<button id="back" style="margin-left:903px" onClick="location.href='/';">뒤로가기</button>-->
     <p id = 'footer'>
  <pre id = 'footer_text'>
      <img src = "/img/logo2.png" width="60" height="30" align="left">                                                                                                                                                                                                                                                                                                               김대호 교수님(PM), 조나훔(조장), 박현경, 장민호, 김진영, 김혜진, 주성민
                                                                                                                                                                                                                                                                                                                   Copyright&copy; 2017 YoungjinCollege Harmony Team All rights reserved</pre>
                                                                                  
</p>
  </body>
</html>