<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/earlyaccess/hanna.css">
    
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!-- 합쳐지고 최소화된 최신 CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

<!-- 부가적인 테마 -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

<!-- 합쳐지고 최소화된 최신 자바스크립트 -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script>
      function imageChange(){
        var albumNumber = document.getElementById('album_number').value;
        var sessionUser = document.getElementById('session_user').value;
        var album_picture = document.getElementById('album_picture').value;
        
        window.open("/imageChange?albumNumber=" + albumNumber + "&sessionUser=" + sessionUser + "&album_picture=" + album_picture, "네이버새창", 
        "width=250px, height=400px, toolbar=no, menubar=no, scrollbars=no, resizable=yes" );
      }
    
      function deleteFunc(){
        
        
        var albumNumber = document.getElementById('album_number').value;
        var sessionUser = document.getElementById('session_user').value;
        
        $.ajax({
          url:"/deleteAlbumAction",
          data:{"albumNumber": albumNumber,
                "sessionUser": sessionUser,
          },
          dataType:"jsonp",
        });
        history.go(0);
        location.href="/myPage/album";
      }
    </script>
    <style media="screen">
    @import url(http://fonts.googleapis.com/earlyaccess/nanumgothic.css);
    
  
  .button2 {
  	display: inline-block;
  	outline: none;
  	cursor: pointer;
  	text-align: center;
  	text-decoration: none;
  	font: 14px/100% Arial, Helvetica, sans-serif;
  	padding: 1px 40px 1px;  	text-shadow: 0 1px 1px rgba(0,0,0,.3);
  	-webkit-border-radius: .5em; 
  	-moz-border-radius: .5em;
  	border-radius: .5em;
  	-webkit-box-shadow: 0 1px 2px rgba(0,0,0,.2);
  	-moz-box-shadow: 0 1px 2px rgba(0,0,0,.2);
  	box-shadow: 0 1px 2px rgba(0,0,0,.2);
  	margin-top: 20px;
  }
  .button2:hover {
  	text-decoration: none;
  }
  .button2:active {
  	position: relative;
  	top: 1px;
  }
  
  
  
  
  
    /* 왼쪽 메뉴바 */
  #musicMenu {
    border-radius: 18px;
    border:5px solid #7FC7AF;
    width:195px; height:420px;
    margin: 15px;
    /*position: relative;*/
    position: absolute;
    top: 215px;
  }
    
    
    .menus a:link { color: black; text-decoration: none;}
    .menus a:visited { color: black; text-decoration: none;}
    
    
    /* 오른쪽 컨텐츠 */
    #main {
      width:800px; height:600px;
      /*padding-top: 150px;*/
      position:absolute;
      top: 27%;
      left:300px;
    }

    /* 왼쪽 앨범 사진 */
 #albumImage {
    width:154px; height:100px;
    margin: 10px 0px 0px 21px;
    position: absolute;
  }

/*
|**************************************************************************
| 메뉴 내용.
|**************************************************************************
*/
  .menus>div{
    border-radius: 38px;
    width: 140px; height: 6px;
    display: inline-block;
    border: 2px solid #7FC7AF;
    margin-bottom: 25px;
    padding:5px 10px 18px 10px;
    text-decoration: none;
  }
  
  .menus a:link { color: black; text-decoration: none;}
  .menus a:visited { color: black; text-decoration: none;}
  
  .menus>a:hover{
    color: lime;
  }
  .menus{
    font-family: 'Hanna', serif;
    text-align:center;
    margin-left: 0%;
    margin-top: 60%;
  }
  .menus p{
    display: inline;

  }

    /* 노래리스트 테이블 */
    #musicTable {
      border:1px solid black;
    }
    /*#songlist{
      margin-top:75%;
      margin-bottom: 15%;
      margin-left: 24%;
    }
    #songModify{
      margin-left: 24%;
      margin-bottom: 15%;
    }
    #songPlayback{
      margin-left: 24%;
      margin-bottom: 15%;
    }*/
      .boardLineList{
        border-spacing: 1px;
        border-collapse: separate;
      }
      .boardLineList{
       position: absolute;
       top: 100px; left: -30px;
       width:900px;
	     padding: 0px;
	     font-size:15px;
	     color:#000000;
	     font-family: 'Nanum Gothic', serif;
      }
      #singlist{
        margin-top: 60px;
        margin-left: 60px;
        margin-bottom: 50px;
        font-family: 'Nanum Gothic', serif;
        font-size: 20px;
        text-align:center;
      }
      table {
        border:0;
        border-spacing:0px;
        border-collapse:collapse;
      }
      #title{
        margin-top: 30px;
      }
      .list_tr{
        cursor:pointer;
      }
      
      th {
        text-align:center;
      }
/*
|**************************************************************************
| 게시판의 형태의 css
|**************************************************************************
*/
      .boardList th { background-color:#dddddd; height:40px; color:#000000; text-align:center;}

      .boardList td { height:16px; border-bottom:1px solid #e8e8e8; text-align:center; padding:8px 0 5px 0; }
      .boardList .left { text-align:left; padding-left:5px; }
      .boardList tr:hover, .boardList .overBg { background-color:#f7f7f7; }
      .boardList .outBg { background-color:#ffffff; }


      .boardLineList th { background-color:#dddddd; height:40px; color:#000000; }
      .boardLineList tr { background-color:#ffffff; }
      .boardLineList td { height:16px; text-align:center; padding:8px 0 5px 0; word-wrap:break-word;}

      .boardLineList .left { text-align:left; padding-left:5px; padding-right:5px; }
      .boardLineList .right { text-align:right; padding-right:5px; padding-left:5px; height:20px;}
      .boardLineList tr:hover, .boardLineList .overBg { background-color:#f7f7f7; }
      .boardLineList .outBg { background-color:#ffffff; }
      .boardLineList { background-color:#c5c5c5; }
      
      button{
        font-family: 'Nanum Gothic', serif;
        font-size: 20px;
        cursor:pointer;
      }
      
    #footer{
      margin-bottom: 80%;
    }
    
    #footer_text{
      font-family: 'Nanum Gothic', serif;
      font-size: 10px;
      width:1260px;
      margin-left:-300px;
      margin-top: -190px;
    }
    </style>
  </head>
  
  <body>
    
    
    <header class="navbar navbar-inverse">
      @include('menu.topmenu')
    </header>
    <div id = "musicMenu">
      <div id = "albumImage" onclick="imageChange();">
        <img src='<?php echo "/albumImages/{$imageFile[0]['album_picture']}"; ?>' alt="" width=100% height=100%>
      </div>
      <div class = "menus">
        <button onclick = "deleteFunc()" class="button2" >앨범 삭제</button>
        <h4 id="title"><?php echo $albumMusics[$albumNumber - 1]->album_title; ?></h4>
        <div><a href="<?php echo "/myPage/album/record/list/{$sessionUser}/{$albumNumber}"; ?>">곡 리스트</a></div>
        <div><a href="<?php echo "/myPage/album/record/modify/{$sessionUser}/{$albumNumber}"; ?>">곡 수정</a></div>
        <div><a href="<?php echo "/myPage/album/record/play/{$sessionUser}/{$albumNumber}"; ?>">플레이어</a></div>
        <div><a href="/myPage/album">뒤로가기</a></div>
        
        
      </div>
    </div>
    
    <div id="main">
      
      <h2 id="singlist">앨범 곡 리스트</h2>
      

          <div id='boardLineList'>
            <table width='100%' class='boardLineList'>
              <colgroup>
                <col width='45%'>
                <col width='10%'>
                <col width='30%'>
                <col width='*'>
              </colgroup>
              <tr>
                <th>음악명</th>
                <th>악기</th>
                <th>합주자 리스트</th>
                <th>합주한 날짜</th>
              </tr>
              <?php
              // <a href='/recordbefore/{$userMusics[$listCount]["id"]}'>
              // onClick ='location.href="/"'
                for($listCount = 0; $listCount < count($userMusics); $listCount++) {
                  
              ?>
                <tr class ='list_tr' onclick='document.location = "/recordbefore/<?php echo $userMusics[$listCount]["id"]; ?>";'>
                <td><?php echo $userMusics[$listCount]['subject']; ?></td>
                <td><?php echo $userMusics[$listCount]['instrument']; ?></td>
                <td><?php echo $partici_name[$listCount]; ?></td>
                <td><?php echo substr($userMusics[$listCount]['created_at'],2,8); ?></td>
                </tr>
                <?php
                }
                ?>
              </div>
<!--<div id = 'footer'>-->
<!--    <hr>-->
<!--    <img src = "/img/logo1.png" width="140" height="110"> -->
<!--    Copyright&copy; Harmony All rights reserved-->
  
<!--  </div>-->
        
    </div>
    <input type='hidden' id='album_number' value='{{$albumNumber}}'>
    <input type='hidden' id='session_user' value='{{$sessionUser}}'>
    <input type='hidden' id='album_picture' value='{{$imageFile[0]->album_picture}}'>
    
  

    
    
    <script type="text/javascript">
      // function f(){
      //   document.href = 
      // }
    </script>
    
    <p id = 'footer'>
  <pre id = 'footer_text'>
      <img src = "/img/logo2.png" width="60" height="30" align="left">                                                                                                                                                                                                                                                                                                      김대호 교수님(PM), 조나훔(조장), 박현경, 장민호, 김진영, 김혜진, 주성민
                                                                                                                                                                                                                                                                                                            Copyright&copy; 2017 YoungjinCollege Harmony Team All rights reserved</pre></p>

  </body>
</html>
