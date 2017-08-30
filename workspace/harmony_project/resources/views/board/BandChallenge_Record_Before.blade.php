<?php
  use App\MP3File;
?>


  <style>@import url(http://fonts.googleapis.com/earlyaccess/nanumgothic.css);</style>
  <!--<link rel="stylesheet" href="/css/bandview.css?var=">-->
    <link rel="stylesheet" href="/css/Before_View.css?var=<?=filemtime('./css/Before_View.css');?>">
    <link rel='stylesheet' href='/css/template.css'>
    <!-- 합쳐지고 최소화된 최신 CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    
    <!-- 부가적인 테마 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
    
    <!-- 합쳐지고 최소화된 최신 자바스크립트 -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
  <style type="text/css">
  /***************************************************************************
  | 각 태그별 가장 큰범위 속성
  |**************************************************************************
  */
    p[title="before"]{
      position:absolute;
      font-size:80px;
      left:200px;
      top:150px;
    }
    p[title="beforeview"]{
      position:absolute;
      font-size:80px;
      left:400px;
      top:150px;
    }
    .navfloat{
        position:absolute;
        left:0px;
      }
    .beforesection {
      position: absolute;
      top: 400px;
      left: 340px;
      display: inline-block;
      width: 1400px;
     
      border: 8px solid #f0f0f5;
    }
    header>.btn{
      position: relative;
      font-size: 15px;
      padding: 10 20px;
      margin-top: 20px;
      margin-left: 20px;
      float: right;
      -webkit-transition-duration: 0.7s; /* Safari */
      transition-duration: 0.7s;
    }
    header>.btn:hover{
      background-color: white;
      color: black;
    }

    .column {
      border: 2px solid #cacaca;
      margin-top:40px;
      margin-left: 100px;
      list-style-type: none;
      background-color:white;
      width: 1150px;
      /*height: 150px;*/
      position:relative;
    }
    .column:hover{
      list-style-type: none;
      box-shadow: 2px 2px 20px darkgray;
    }
    .list{
      margin-top: -220px;
    }
    .cover{
      position:relative;
      display:inline-block;
      padding-top:15px;
      padding-left:15px;
      padding-bottom:10px;
      padding-right:15px;
      background-color: #6d928c;
      left:0;
    }
    .cover img {
      width:120px;
      height:120px;
      border:1px solid black;
    }
    
    .info{
      position:absolute;
      width:230px;
      top:30px;
      left:350px;
    }
    .toptitle{
      /*border: 1px solid;*/
      position:relative;
      font-size:30px;
      /*border-top:1px solid black;*/
      /*border-bottom:1px solid black;*/
      margin-top:20px;
      left:-200px;
      width:652px;
      text-align: center;
      display:block;
      background-color: #cacaca;
    }
    .albumtitle{
      position:relative;
      font-size:25px;
      top: -20px;
      left:-180px;
      width:500px;
    }
    .artist{
      position:relative;
      width:300px;
      text-align:right;
      margin-top:-45px;
      margin-left: -30px;
    }
    .foot{
      width:575px;
      height:40px;
      /*border-top:1px solid black;*/
      position:relative;
      left:30px;
      top:5px;
      text-align:left;
    }
    .foot>ul li{
      position:relative;
      display:inline-block;
      margin-top:10px;
      margin-left:100px;
    }
    .toptable{
      position:absolute;
      border-left:1px solid black;
      width:30%;
      top:0;
      left:70%;
      height:100%;
    }
    .publisher{
      position:relative;
      top:10%;
      display:block;
    }
    .publisher p{
      position:relative;
      text-align:center;
    }
    .publisher p[name="boardtitle"]{
      display:inline-block;
      background-color:#AFEEEE	;
      border-radius:15px;
      left:38%;
      padding:10px;
    }
    p[name="publishername"]{
      top:20%;
      text-align:center;
    }
    /*
    |**************************************************************************
    | 음원에 대한 정보들의 위치를 지정해주고 경계선을 그어준다.
    |**************************************************************************
    */
    #imgbox{
        width:700px;
        height:350px;
        font-family: Mouse Memoirs, Hanna, gulim;
        position: absolute;
        top: 450px; 
        left: 510px;
        border: 8px solid #7ABA66;
        border-radius: 10px;
        background-color: white;
      }
    #imgbox>img{
      float:left;
      margin:20px;
      width:200px;
      height:200px;
    }
    /*
    |**************************************************************************
    | p태그의 padding 및 글자크기 지정
    |**************************************************************************
    */
    .font{
      position:relative;
      padding-top:5%;
      padding-bottom:10%;
      font-size: 30px;
     }
     /*
      |**************************************************************************
      | 버튼의 이미지와 이벤트 및 글자크기를 지정해준다
      |**************************************************************************
      
      form>#buttonBox{
        top:0px;
        margin-left: 5px;
        background:#1AAB8A;
        color:white;
        border:none;
        position:relative;
        height:30px;
        font-size:20px;
        padding:0 0.8em;
        cursor:pointer;
        /*transition:400ms ease all;*/
        /*outline:none;
      }*/
      /*
      |**************************************************************************
      | 마우스가 올려 졌을 때의 색상을 지정
      |**************************************************************************
      
      form>#buttonBox:hover{
        background:#fff;
        color:#1AAB8A;
      }
      /*
      |**************************************************************************
      | button의 위치를 padding을 통해 지정해준다.
      |**************************************************************************
      
      #buttonBox{
        position:absolute;
        left:38%;
        top:62%;
      }*/
      .styled-select{
        overflow:auto;
        width:1000px;
        height:500px;
        border-radius: 5px; 
        border: 1px solid black; 
        position: absolute; 
        top:850px;
        left:515px;
      }
      .bandlist{
        overflow:auto;
        width:450px;
        height:400px;
        border-radius: 5px; 
        border: 1px solid black; 
        position: relative; 
        top:30px;
        left: 500px;
      }
      .layer{
        position:absolute;
        top:30px;
        left:30px;
        width:400px;
      }
      .listname{
        position:relative;
        color:black;
        display:inline-block;
        margin-right:10px;
      }
      /*
      |**************************************************************************
      | 네비게이션 메뉴
      |**************************************************************************
      */
      .boxy-menu li{
        position:relative;
        top:230px;
      }
      input[type="button"]{
          margin-left: 10px;
          background:#1AAB8A;
          color:#fff;
          border:none;
          position:relative;
          top:530px;
          left:560px;
          width:120px;
          height:50px;
          font-size:20px;
          padding:0 0.8em;
          cursor:pointer;
      }
      input[type="button"]:hover{
          background:#fff;
          color:#1AAB8A;
      }
      .progress{
        position:absolute;
        left:1000px;
        top:170px;
      }
      .progress2{
        position:absolute;
        left:800px;
        top:170px;
      }
      
      
      #AlbumMain{
        position: absolute;
        top: 200px; left: 280px;
        /*border: 1px solid;*/
        width: 1000px; height: 400px;
        margin-top: 215px;
        
      }
      #mainBox{
        /*background: #ddd;*/
        border: 1px solid #eee;
        /*outline: 1px solid #aaa;*/
        width: 400px; height: 150px;
        float: left;
        /*display: inline-block;*/
        -webkit-box-shadow: inset 0 1px 12px #999;
        -moz-box-shadow: inset 0 1px 12px #999;
        -ms-box-shadow: inset 0 1px 12px #999;
        box-shadow: inset 0 1px 12px #999;
        border-radius: 15px;
        margin-right: 60px;
      }
      #small_image img{
        width: 120px; height: 120px;
        border-radius: 60px;
        /*float: left;*/
        margin-right: 0px;
      }
      /*#Testimg div{*/
      /*  border: 1px solid;*/
      /*  width: 280px; height: 50px;*/
      /*  margin-left: 200px;*/
      /*  margin-top: 50px;*/
        /*margin-top: 20px;*/
        /*display: inline;*/
      /*}*/
      #AlbumBox{
        /*border: 1px solid;*/
        width: 295px; height:137px;
        margin-left: 150px;
        margin-top: 20px;
      }
      #small_image{
        float: left;
        /*border:1px solid;*/
        width: 160px; height:160px;
        margin-left:15px;
        margin-top:-3px;
        margin-right: -150px;
        
      }
      #AlbumBox #title{
        display:inline;
        margin-left: 88px;
      }
      #AlbumBox #boardtest{
        /*display:inline;*/
        font-size: 20px;
        width: 230px;
        white-space:nowrap;
        overflow:hidden; 
        text-overflow:ellipsis;
        margin-top: -34px;
        margin-left: -10px;
      }
      #AlbumBox #albumname{
        /*display:inline;*/
        margin-left: 10px;
        margin-bottom: 0px;
        width: 200px;
        white-space:nowrap;
        overflow:hidden; 
        text-overflow:ellipsis;
        font-size: 5px;
      }
      #AlbumBox img{
        width: 25px; height: 25px;
        margin-bottom: 14px;
        margin-right: 15px;
      }
      .user_name{
        display: inline;
        padding-left:1px;
        /*padding-top:-50px;*/
        /*margin-bottom: 20px;*/
      }
      
      .menu a:link { color: blue; text-decoration: none;}
      .menu a:visited { color: white; text-decoration: none;}
      .menu > a:hover{
        color: lime;
      }
      .topmenu_align{
        background-color:#1F8A70;
        width:100%;
      }
  </style>
  <script>
    window.onload=function(){
      function funLoad(){
        var Cheight = $(window).height();
        $('.beforesection').css({'height':Cheight+'px'});
      }
      window.onload = funLoad;
      window.onresize = funLoad;
    }

  </script>



<!--
|**************************************************************************
| 페이지로고/상단우측메뉴/주메뉴 표시 view/menu/topmenu.blade.php
|**************************************************************************
 -->
<div class="topmenu_align">
  @include('menu.topmenu')  
</div>
<div class="container align">
  <div class="row "> 
    <div class="navfloat">
      @include('board.BandChallenge_Navi')    
    </div>
  </div>

   <?php
   $k = 0;
    if($id == null){
        echo "
          
        
        <div id='AlbumMain'>
            
        <div class='table'>
        <ul class='list'>";
        foreach ($band_audio_boards as $band_audio_board){
           
          $key = key(current($midis->where('id','=',$band_audio_board['midi_id'])));
            $src = "https://harmony-project-chonahoom.c9users.io/midi/".$midis->where('id','=',$band_audio_board['midi_id'])[$key]['path'];
                $src = $src.'\\'.$midis->where('id','=',$band_audio_board['midi_id'])[$key]['img'];
            $music_name = $midis->where('id','=',$band_audio_board['midi_id'])[$key]['music_name'];
            $composer = $midis->where('id','=',$band_audio_board['midi_id'])[$key]['composer'];
//전체 밴드 오디오 게시판
 ?>
    <!--<li class="column">-->
    <!--  <div class="cover">-->
    <!--      <a href="/recordbefore/{{$band_audio_board['id']}}">-->
    <!--          <img src=<?php echo $src;?>/>-->
    <!--      </a>-->
    <!--  </div>-->
    <!--  <div class="info">-->
          <!--<a href="/recordbefore/{{$band_audio_board['id']}}">-->
          <!--</a>-->
    <!--      <div class="albumtitle">-->
    <!--          {{$music_name}}-->
    <!--      </div>-->
    <!--      <div class="artist">-->
    <!--          {{$composer}}-->
    <!--      </div>-->
    <!--      <div class="toptitle">-->
    <!--        제목 : {{$band_audio_board['subject']}}-->
    <!--      </div>-->
    <!--      <div class="foot">-->
    <!--          <ul>-->
    <!--            <li>{{substr($band_audio_board['created_at'],0,-9)}}</li>-->
    <!--            <li>좋아요 : {{$band_audio_board['goods']}}</li>-->
    <!--          </ul>-->
    <!--      </div>-->
    <!--  </div><!--info끝-->
      
      
    <!--  <div class="toptable">-->
    <!--    <div class="publisher">-->
    <!--      <p name="boardtitle">게시자</p>-->
          <!--<img src = '/img/<?php echo $user_picture[$k][0]->userImage; ?>' width=30px; height=30px;>-->
    <!--      <p name="publishername">{{substr($partici_name[$k],0,-1)}}</p>-->
    <!--    </div>-->
    <!--  </div>-->
    <!--</li>-->
    
  
    <a href="/recordbefore/{{$band_audio_board['id']}}">
    
    <div id="mainBox">
        <div id="Testimg">
          <div id="small_image">
            <img src=<?php echo $src;?>/>
          </div>
        <div id="AlbumBox">
            <p id="albumname">앨범명: {{$music_name}} | {{$composer}}</p><br><br>
            <p id="boardtest">제목: {{$band_audio_board['subject']}}</p>
            <img src='/img/<?php echo $user_picture[$k][0]->userImage; ?>'>
            <p class="user_name">{{substr($partici_name[$k],0,-1)}}</p><br>
            <p id="title">{{substr($band_audio_board['created_at'],0,-9)}}
                좋아요 : {{$band_audio_board['goods']}}</p>
        </div>
    </div>
    </div>
    </a>
    


  <?php
  $k++;
         }
    echo "</ul></div></div>";
    }
    else{
      // $mp3file = new MP3File("uploads/bandChallenge/audio/20170613173549ua.mp3");
      // dump($mp3file);
      // $duration1 = $mp3file->getDurationEstimate();
      // $duration2 = $mp3file->getDuration();
      // echo "duration: $duration1 seconds"."\n";
      // echo "estimate: $duration2 seconds"."\n";
      // echo MP3File::formatTime($duration2)."\n";
 ?>
 
 
    <div id="imgbox">
      <img id="img1" src="<?php echo '/midi/'.$midi['path'].'/'.$midi['img'];?>"/>
      <div class="font">
        <p>음원명 : <?php echo $midi['music_name'];?></p>
        <p>작곡가 : <?php echo $midi['composer'];?></p>
        <p>장르 : <?php echo $midi['genre'];?></p>
      </div>{{--font 의 div--}}
    </div>
   
      <div class="styled-select" style="">
        <div class="bandlist"><p>악기 리스트</p>
         <?php
          $i = 0;
        $insts=explode(",", $band_audio_board['selected_instruments']);
       
        foreach ($insts as $inst){
          
            $inst_src = '/midi/'.$midi['path'].'/'.$inst;
            echo "
            <link rel='stylesheet' href='/css/bandchallenge/scroll.css'>
            <link rel='stylesheet' href='/css/checkbox.css'>
            <div class='listborder'>
            <img src='/img/base.png'/>
            <div class='toggle-button toggle-button--aava'>
            <div class='listname'>
            ".substr($inst,0,-4)."
            </div>
            <input type='checkbox' id='toggleButton[$i]' checked name='musics[]' value='$inst'/>
                <label for='toggleButton[$i]' data-on-text='On' data-off-text='Off'></label>
                
                </div><br>";
            echo "<audio name='my_audio[]' controls>
                <source src='$inst_src' type='audio/mpeg'>
            </audio></div>";
            $i++;
        }
         ?>
         
        </div>
        
        <div class="layer" name="layer" >
          <div>합주자 리스트</div>
           <?php
              foreach ($band_audio_particis as $band_audio_partici){
                  $inst_src = '/uploads/bandChallenge/audio/'.$band_audio_partici['file_name'];
                  echo "<div style='border-radius: 5px;margin: 5px;padding: 5px;border: 1px solid black'>".
                      substr($band_audio_partici['file_name'],15,-4)." 님의 연주".
                ": <input type='checkbox' checked name='participants[]' value='$band_audio_partici[file_name]'/><br>";
                  echo "<audio name='my_participant[]' controls>
                  <source src='$inst_src' type='audio/mpeg'>
              </audio></div>";
              }
           ?>
        </div>{{--layer의 div--}}
      </div>{{--styled-select의 div--}}
      
      <div id="buttonBox">
        <form name="recordForm" action="/recordwork" method="post">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <input type="hidden" name="music_checked_list" value="">
          <input type="hidden" name="partici_checked_list" value="">
          <input type="hidden" name="band_board_id" value="{{$id}}">
    
          <input type="hidden" name="midi_id" value="{{ $midi['id'] }}">
          <input type="button" onclick="recordPage();" value="합주하기" ></input>
          <input type="button" onclick="allCheck();" value="전체선택"></input>
          <input type="button" name="listen_btn" onclick="init();" value="▶">
       </form>
       
      </div>{{--button끝--}}
 <script src="/scripts/same_time_play.js?var=<?=filemtime('./scripts/same_time_play.js');?>"></script>
 <?php
    }
 ?>