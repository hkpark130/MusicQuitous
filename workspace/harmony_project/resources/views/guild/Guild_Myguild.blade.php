
<meta name="csrf_token" content="{{ csrf_token() }}"/>
<head>
   <!-- 합쳐지고 최소화된 최신 CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    
    <!-- 부가적인 테마 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
    
    <!-- 합쳐지고 최소화된 최신 자바스크립트 -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Baloo+Bhaijaan|Ravi+Prakash" rel="stylesheet">
  <style type="text/css">
  @import url(http://fonts.googleapis.com/earlyaccess/nanumgothic.css);
    /*로고 및 길드명 부분*/
    .guildicon img{
      width:100; 
      height:100;
      display:inline-block;
      border-radius:85px;
      
    }
    p[name="guildname"]{
      font-size:40px;
      font-family: 'Nanum Gothic', serif;
      /*color:darkgreen;*/
    }
    /*제일 상위 align*/
    .post{
      width:800px;
    }
    .toptitle{
      border-bottom:2px solid black;
    }
    .rank_title{
      width:600px;
      margin-top:120px;
    }
    .rank_title li{
      display:inline-block;
      width:19%;
      text-align:center;
      margin:5px auto;
    }
    .rank_title a{
      text-decoration:none;
    }
    .rank_title a:hover{
      background-color:#999;
    }
   .infotable{
     float:right;
     width:100%;
   }
   tr<th{
     text-align:center;
   }
   #test{
     position: absolute;
     top: 300px; left: 300px;
     
     
     border: 1px solid red;
     width: 200px; height: 200px;
   }
   #nnno{
     position: absolute;
     top: 500px; left: 1000px;
     border: 1px solid;
     width: 200px; height: 200px;
   }
    #footer{
      margin-bottom : 25%;
    }
    #footer_text{
      font-family: 'Nanum Gothic', serif;
      font-size: 10px;
      
    }
    .test{
      border:1px solid black;
    }
    
    .menu a:link { color: blue; text-decoration: none;}
    .menu a:visited { color: white; text-decoration: none;}
    .menu > a:hover{
      color: lime;
    }
    .align{
      margin-top:40px;
    }
    .meminfo{
      border-radius:10px;
      border:1px solid #999;
    }
    .meminfo p{
      border:2px solid black;
      border-radius:30px;
      margin:20px auto;
      width:100px;
      height:30px;
    }
    .chatroom{
      background-color:black;
      border-radius:20px;
      height:500px;
      width:310px;
      float:right;
    }
    .chatroom iframe{
      margin:40px auto;
      width:280px;
      height:380px;
      background-color:white;
      border-radius:15px;
    }
    .iponeone{
      width:50px;
      height:50px;
      background-color:black;
      position:absolute;
      top:430px;
      left:45%;
      border-radius:50px;
      border:3px solid silver;
    }
    .board{
      height:400px;
    }
    .mem_list{
      margin-top:100px;
      width:500px;
    }
    p[name="tabletitle"]{
      font-size:30px;
      text-align:center;
    }
  </style>
  </head>
  <body>
  <!--
  |**************************************************************************
  | bandChallenge- Record합주_상단 메뉴부분
  |*********************************************ㄹ*****************************
  -->
  <div class="top">
    @include('menu.topmenu')
  </div>
  <div class="container align ">
    <div class="row ">
      <div class="col-md-8 guildicon ">
        <div class="col-md-12">
          <div class="row ">
            <div class="col-md-12">
              <p name="guildname"><img src="/img/guildmark/<?php echo "{$myguild[0]['guild_mark']}" ?>"></img>
              <?php echo "{$myguild[0]['guild_name']}" ?></p>
            </div>
          </div>
          <div class="row ">
            <div class="col-md-3 text-center meminfo ">
              <h2>user</h2>
              <img src="/img/ali.jpg" width="100" height="100"></img>
              <p>MASTER</p>
              <p>1 위</p>
              <p>1000P</p>
            </div>
            <div class="col-md-9 board ">
              <table class="table table-condensed ">
                <p name="tabletitle">공지사항</p>
                <tr>
                  <td>번호</td>
                  <td>제목</td>
                  <td>작성자</td>
                  <td>작성일</td>
                  <td>조회</td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>Laravel길드에 오신것을 환영합니다</td>
                  <td>user</td>
                  <td>2017-08-25</td>
                  <td>5</td>
                </tr>
              </table>
              
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 chatroom">
        <div class="row ">
          <div class="col-md-12 ">
            <iframe id="chatboxs" src="/chat" frameborder="0"></iframe>
            <div class="iponeone"></div>
          </div>
        </div>
      </div>  
    </div>
    <div class="row ">
            <div class="col-md-4 rank_title ">
              <ul class="toptitle">
                <li>순위</li>
                <li>길드원</li>
                <li>직위</li>
                <li>접속상태</li>
                <li>포인트</li>
              </ul>
              <?php
              $k = 0;
              echo "<ul>
              <form id='member' action='/' method='post' name='member'>";
                foreach ($guildmembers as $guildmember) {
                  echo "
                  <input type='hidden' name='guildmember[]' value='{$guildmember['guild_user']}'>
                  
                  <a href='#' onclick='memlist($k)'>
                    <li>1</li>
                    <li>{$guildmember['guild_user']}</li>
                    <li>{$guildmember['guild_position']}</li>";
                      if(!empty($connections[$k])){
                        echo "
                        <li>접속</li>";
                      }
                      if(empty($connections[$k])){
                        echo "
                        <li>미접속</li>";
                      }
                      echo "
                    <li>0</li>
                    </a>
                    <input type='hidden' name='_token' value='{{ csrf_token() }}'>
                   ";
                  $k++;
                }
                echo "</form>
                    </ul>";
                ?>
              </div>
              
              <div class="col-md-5 ">
              <div class="mem_list" id="open">
                <table class="infotable table table-hover" >
                  <script></script>
                  <tr>
                    <th>제목</th>
                    <th>연주곡 명</th>
                    <th>연주한 악기</th>
                    <th>참여한 사람</th>
                  </tr>
                  <tr>
                    <td id="subject"></td>
                    <td id="midi_name"></td>
                    <td id="instrument"></td>
                    <td id="partici_name"></td>
                  </tr>
                  </a>
                </table>
            </div>
          </div>
        </div>
  </div>
  <!--<div id="test">-->
  <!--  <p>time : sada<span id="time"></span></p>-->
  <!--  <input type="button" id="execute" value="execute" />-->
  <!--</div>-->
  <p id = 'footer'>
  <pre id = 'footer_text'>
      <img src = "/img/logo2.png" width="60" height="30" align="left">                                                                                                                                                                                                                                               김대호 교수님(PM), 조나훔(조장), 박현경, 장민호, 김진영, 김혜진, 주성민
                                                                                                                                                                                                                                                     Copyright&copy; 2017 YoungjinCollege Harmony Team All rights reserved</pre>
                                                                                  
</p>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
var guildmemberinfo = document.getElementsByName("guildmember[]");

  function memlist(guild_user) {
    $('#subject').empty();
    $('#midi_name').empty();
    $('#instrument').empty();
    $('#partici_name').empty();
    $('#create_at').empty();
      $.ajax({
        type : 'post',
        url:'json/guildmember_infolist',
        dataType:'json',
        data:{
            '_token' : "{{csrf_token()}}",
    				meminfo : guildmemberinfo[guild_user]['value'],
          },
        success: function(data) {
          
          var boards_object = [];
              boards_object = data;
          $(boards_object).each(function(i){
            
            for(var d=0; d<boards_object[i].length; d++){
             
              var borads_list = boards_object[i];
              
              if(i==1){
                 //console.log(borads_list[d].subject);
                var boards_id  = borads_list[d]['id'];
                var boards_subejct  = borads_list[d]['subject'];
                var boards_instrument  = borads_list[d]['instrument'];
                var boards_created_at  = borads_list[d]['created_at'];
                var boards_writer_id  = borads_list[d]['writer_id']; 
                
                $('#subject').append(
                  "<a href='https://harmony-project-chonahoom.c9users.io/recordbefore/"+boards_id+"'><div>"+
                  boards_subejct+
                  "</div></a>"
                  );
                
                $('#instrument').append(
                  "<div>"+
                  boards_instrument+
                  "</div>"
                  );
                
                $('#partici_name').append(
                  "<div>"+
                  boards_writer_id+
                  "</div>"
                  );
                
                $('#create_at').append(
                  "<div>"+
                  boards_created_at+
                  "</div>"
                  );
                  
              }//if end
              else{
                var boards_midi_id  = boards_object[0][d];
                
                $('#midi_name').append(
                  "<div>"+
                  boards_midi_id+
                  "</div>"
                  );
              }//else end
            }//for end
           });//each end
           if(data==null){
             $('#subject').append(
              "<div>"+
              "현재 사용자는 연주한 곡이 없습니다."+
              "</div>"
              );
           }
          }//success
      });//ajax end
  }
</script>
