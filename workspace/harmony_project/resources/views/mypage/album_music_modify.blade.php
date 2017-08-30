<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <!--<script src= "https //ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"> </script>-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/earlyaccess/hanna.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    
    <!-- 부가적인 테마 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
    
    <!-- 합쳐지고 최소화된 최신 자바스크립트 -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<style>
@import url(http://fonts.googleapis.com/earlyaccess/nanumgothic.css);

  .button {
  	display: inline-block;
  	outline: none;
  	cursor: pointer;
  	text-align: center;
  	text-decoration: none;
  	font: 14px/100% Arial, Helvetica, sans-serif;
  	padding: .5em 11em .25em;
  	text-shadow: 0 1px 1px rgba(0,0,0,.3);
  	-webkit-border-radius: .5em; 
  	-moz-border-radius: .5em;
  	border-radius: .5em;
  	-webkit-box-shadow: 0 1px 2px rgba(0,0,0,.2);
  	-moz-box-shadow: 0 1px 2px rgba(0,0,0,.2);
  	box-shadow: 0 1px 2px rgba(0,0,0,.2);
  }
  .button:hover {
  	text-decoration: none;
  }
  .button:active {
  	position: relative;
  	top: 1px;
  }
  
  
  
  .button2 {
  	display: inline-block;
  	outline: none;
  	cursor: pointer;
  	text-align: center;
  	text-decoration: none;
  	font: 14px/100% Arial, Helvetica, sans-serif;
  	padding: 1px 40px 1px;
  	text-shadow: 0 1px 1px rgba(0,0,0,.3);
  	-webkit-border-radius: .5em; 
  	-moz-border-radius: .5em;
  	border-radius: .5em;
  	-webkit-box-shadow: 0 1px 2px rgba(0,0,0,.2);
  	-moz-box-shadow: 0 1px 2px rgba(0,0,0,.2);
  	box-shadow: 0 1px 2px rgba(0,0,0,.2);
  	margin-top: 15px;
  }
  .button2:hover {
  	text-decoration: none;
  }
  .button2:active {
  	position: relative;
  	top: 1px;
  }
  
  
  /*익스플로우 용 스크롤바*/
  html { scrollbar-arrow-color: #efefef;
         scrollbar-Track-Color: #efefef; 
         scrollbar-base-color: #dfdfdf;
         scrollbar-Face-Color: #dfdfdf;
         scrollbar-3dLight-Color: #dfdfdf;         
         scrollbar-DarkShadow-Color: #dfdfdf;
         scrollbar-Highlight-Color: #dfdfdf;
         scrollbar-Shadow-Color: #dfdfdf;
  }
        
  /*크롬용 스크롤바*/
  ::-webkit-scrollbar {width: 12px; height: 12px;  }
  ::-webkit-scrollbar-button:start:decrement, 
  ::-webkit-scrollbar-button:end:increment {display: block; width: 12px;height: 12px; background: url() rgba(0,0,0,.05);}
  ::-webkit-scrollbar-track {     background: rgba(0,0,0,.05); }
  ::-webkit-scrollbar-thumb {  background: rgba(0,0,0,.1);  }

  /*글자 초과시 처리*/
  
  
  
  #trash-can{
    /*border:1px solid;*/
    width:250px; height:170px;
    margin: 5px 0px 0px 775px;
  }
  #sortable1 div{
    float: left;
    border-radius: 10px;
    margin: 10px 0px 10px 20px;
    /*border:1px solid #7FC7AF;*/
    width: 155px; height: 130px;
    white-space:nowrap;
    overflow:hidden; 
    text-overflow:ellipsis; 
  }
  #sortable1 img{
    border-radius: 10px;
    margin: 10px 0 0 10px;
  }
  #sortable1 {
    font-size: 15px;
    font-family: 'Hanna', serif;
    /*text-align: center;*/
    /*border-radius: 20px;*/
    margin: 20px 0 0 20px;
    border: 2px solid #7FC7AF;
    width: 380px; height: 380px;
    overflow: auto;
  }
  #sortable2{
    font-size: 15px;
    font-family: 'Hanna', serif;
    /*text-align: center;*/
    /*border-radius: 20px;*/
    margin: -384px 0 0 430px;
    border: 2px solid #7FC7AF;
    width: 440px; height: 340px;
    overflow: auto;
    z-index: -1px;
  }
  #sortable2 div{
    float: left;
    border-radius: 10px;
    margin: 10px 0px 10px 40px;
    /*border:1px solid #7FC7AF;*/
    width: 155px; height: 130px;
    white-space:nowrap;
    overflow:hidden; 
    text-overflow:ellipsis; 
  }
  #sortable2 img{
    border-radius: 10px;
    margin: 10px 0 0 10px;
  }


  #trash-can {
   background-image: url('/img/trashCanClosed.png');
   background-repeat: no-repeat;
   background-size: 90px 40px;
  }

  #trash-can:hover {
     background-image: url('/img/trashCanOpen.png');
     background-size: 100px 70px;
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

  /* 오른쪽 컨텐츠 */
  #main {
    border-radius: 18px;
    border: 5px solid #7FC7AF;
    width:900px; height:420px;
    /*padding-top: 150px;*/
    position:absolute;
    top: 230px;
    left:250px;
  }

  /* 왼쪽 앨범 사진 */
  #albumImage {
    width:154px; height:100px;
    margin: 10px 0px 0px 21px;
    position: absolute;
  }


  /* 메뉴 내용 */
  .menus>div{
    border-radius: 38px;
    width: 140px; height: 6px;
    display: inline-block;
    border: 2px solid #7FC7AF;
    margin-bottom: 25px;
    padding:5px 10px 23px 10px;
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
     margin:0px;
     padding: 0px;
     font-size:11px;
     color:#898989;
     font-family: 'Nanum Gothic', serif;
    }
    #singlist{
      margin-left: 41%;
      margin-bottom: 5%;
    }
    #button{
      position: absolute;
      top: 150px; left: 410px;
      z-index:5;
    }
    #revision{
      display: inline-block;
      margin-left: 44%;
    }
    #storage{
      position: absolute;
      top: 373px; left: 428px;
    }
    
    p{
        /*padding-top: 50px;*/
        margin-top: 10px;
        margin-left: 14px;
        margin-right: 14px;
    }
    
    
    #footer{
      margin-bottom : 40%;
      
    }
    
    #footer_text{
      font-family: 'Nanum Gothic', serif;
      font-size: 10px;
      
    }
  </style>
  
  
  
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script type="text/javascript">


  // 삭제하는 데이터 담는 그릇
  var deleteArray = [];
  $(function() {
    $("#sortable1, #sortable2").sortable({
      connectWith:".connectedSortable",
  });


    // 휴지통
    $("#trash-can").droppable({
        drop: function ( event, ui) {
          $(ui.draggable).remove();
          // 배열에 1개씩 삭제 요소 넣기
          deleteArray.push(ui['draggable'][0]['innerText']);
        }
    });
  });



  function save(){
    var data2 = $("#sortable1, #sortable2")[0].innerText;
    var data  = $("#sortable1, #sortable2")[1].innerText;
    var albumNumber = <?php echo $albumNumber; ?>;
      $.ajax({
        url:'/alterAlbumListAction',
        data:{"nullKey":rplLine(data),
              "key":rplLine(data2),
              "albumNumber":albumNumber,
              "deleteArray":deleteArray},
        dataType:'jsonp',
      });
    alert("저장 완료");
    history.go(0);
  }

  // 앨범 삭제
  
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
  
  
  function rplLine(value){
      if (value != null && value != "") {
          return value.replace(/\n/g, "\\n");
      }else{
          return value;
      }
  }
  
  
  
  
  
  </script>

</head>
<body>
  <header class="navbar navbar-inverse">
    @include('menu.topmenu')
  </header>

<div id = "musicMenu">
  
  <div id = "albumImage">
    <img src='<?php echo "/albumImages/{$imageFile[0]['album_picture']}"; ?>' alt="" width=100% height=100%>
  </div>

  <div class = "menus">
    <button onclick = "deleteFunc()" class="button2">앨범 삭제</button>
    <h4 id="title"><?php echo $albumMusics[$albumNumber - 1]->album_title ?></h4>
     <div><a href="<?php echo "/myPage/album/record/list/{$sessionUser}/{$albumNumber}"; ?>">곡 리스트</a></div>
        <div><a href="<?php echo "/myPage/album/record/modify/{$sessionUser}/{$albumNumber}"; ?>">곡 수정</a></div>
        <div><a href="<?php echo "/myPage/album/record/play/{$sessionUser}/{$albumNumber}"; ?>">플레이어</a></div>
        <div><a href="/myPage/album">뒤로가기</a></div>
  </div>
</div>

<div id="main">
  <!--<h2 id="revision">노래수정</h2>-->
    
    
    <div id="sortable1" class="connectedSortable">
      <?php
        for ($i = 0; $i < count($userMusics); $i++) {
          echo "<div>";
          echo "<img src='/midi/{$userMusics[$i]->path}/{$userMusics[$i]->img}' width='130' height='82'>";
          echo "<p>{$userMusics[$i]->subject}</p>";
          echo "</div>";
        }
       ?>
    </div>


    
    <img id="button" src="/img/add-button.png" alt="" width="35" height="35">
    
    
    <div id="sortable2" class="connectedSortable">
        <?php
          for ($i = 0; $i < count($allMusics); $i++) {
            echo "<div>";
            echo "<img src='/midi/{$allMusics[$i]->path}/{$allMusics[$i]->img}' alt='The peaks of High Tatras' width='130' height='82'>";
            echo "<p>{$allMusics[$i]->subject}</p>";
            echo "</div>";
          }
        ?>
    </div>
      
      
    <script>
      $("#button").click(function () {
        if ($("#sortable2").is(":hidden"))
        {
          $("#sortable2").show("slow");
        }else{
          $("#sortable2").slideUp();
        }
     });
    </script>
  <button class="button" id="storage" onClick="save()">저장</button>
  <div id="trash-can"></div>
</div>

<input type='hidden' id='album_number' value='{{$albumNumber}}'>
<input type='hidden' id='session_user' value='{{$sessionUser}}'>

<p id = 'footer'>
  <pre id = 'footer_text'>
      <img src = "/img/logo2.png" width="60" height="30" align="left">                                                                                                                                                                                                                                                                                                               김대호 교수님(PM), 조나훔(조장), 박현경, 장민호, 김진영, 김혜진, 주성민
                                                                                                                                                                                                                                                                                                                   Copyright&copy; 2017 YoungjinCollege Harmony Team All rights reserved</pre></p>

</body>
</html>