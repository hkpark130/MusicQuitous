{"filter":false,"title":"BandChallenge_Video_Before_View.blade.php","tooltip":"/harmony_project/resources/views/board/BandChallenge_Video_Before_View.blade.php","undoManager":{"mark":9,"position":9,"stack":[[{"start":{"row":69,"column":4},"end":{"row":95,"column":0},"action":"remove","lines":["<div id=\"imgbox\">","      <img src=\"/img/teayeon3.jpg\" width=\"250\" height=\"250\">","      <img title=\"play_button\" src=\"/img/play.png\"></img>","      <div class=\"font\">","        <div class=\"point\"><img src=\"/img/cross_point_green.png\"></img></div>","        <p>곡명 : 베이스로 작곡해봤어요!</p>","        <p>작곡자 : 조나훔</p>","        <p>장르 : Rop / Hip-hop</p>","        <p>작곡일 : 2017.05.18</p>","        <p>작곡에 사용된 악기 : 베이스기타</p>","      </div>","","      <div class=\"user_comment\">","          <img title=\"user_profile\" src=\"/img/JNH.png\"></img>","          <p> 연주한 것을 동영상으로 촬영 해보았습니다!! 많은 분들 참여 부탁드려요^^ </p>","      </div>","","      <div id=\"buttonBox2\">","        <a href=\"{{ url('#')}}\">♥ 좋아요</a>","        <a href=\"{{ url('#')}}\">다른 합주 ?개</a>","        <a href=\"{{ url('/videobefore')}}\">이전</a>","        <a href=\"{{ url('/band_VideoWork')}}\">연주하기</a>","      </div>","    </div>","  </body>","</html>",""],"id":2},{"start":{"row":69,"column":4},"end":{"row":152,"column":0},"action":"insert","lines":["<div class=\"imgbox\">","      <div class=\"videobox\">","        <img title=\"first\" src=\"/img/KJY.png\" width=\"250\" height=\"250\">","        <img title=\"second\" src=\"/img/JSM.png\" width=\"250\" height=\"250\">","      </div>","      <div class=\"font\">","        <div class=\"point\">","          <img src=\"/img/cross_point_green.png\">","        </div>","        <p>곡명 : 베이스로 작곡해봤어요!</p>","        <p>작곡자 : 조나훔</p>","        <p>참여자 : 김혜진</p>","        <p>장르 : Rop / Hip-hop</p>","        <p>참여일 : 2017.05.19</p>","        <p>작곡에 사용된 악기 : 베이스기타</p>","        <p>작곡에 사용된 악기 : 신디사이저</p>","      </div>","","      <div class=\"user_comment\">","        <img title=\"user_profile1\" src=\"/img/JNH.png\">","        <p title=\"user_profile1\"> 연주한 것을 동영상으로 촬영 해보았습니다!! 많은 분들 참여 부탁드려요^^ </p>","        <p title=\"user_profile2\"> 와 베이스에다가 신디 치니까 정말 재미있네요 ㅎㅎㅎ 다음에도 같이해요! </p>","        <img title=\"user_profile2\" src=\"/img/JNH.png\">","","      </div>","","<!--","|**************************************************************************","| 3개의 버튼을 표시하는 부분","|**************************************************************************","-->","<div id=\"buttonBox\">","  <form name=\"recordForm\" action=\"/recordwork\" method=\"post\">","    <input type=\"hidden\" name=\"_token\" value=\"\">","    <input type=\"hidden\" name=\"music_checked_list\" value=\"\">","    <input type=\"hidden\" name=\"partici_checked_list\" value=\"\">","    <input type=\"hidden\" name=\"band_board_id\" value=\"\">","","    <input type=\"hidden\" name=\"midi_id\" value=\"\">","    <input type=\"button\" onclick=\"recordPage();\" value=\"좋아요♥\"></input>","    <input type=\"button\" onclick=\"recordPage();\" value=\"합주하기\"></input>","    <input type=\"button\" onclick=\"allCheck();\" value=\"이전\"></input>","    <input type=\"button\" name=\"listen_btn\" onclick=\"init();\" value=\"▶\">"," </form>","</div>","<div id='bottom_buttonBox'>","<a href='#open'>다른 합주 4개</a>","</div>","<div class=\"another_play\" id=\"open\">","    <div>","        <p>","          <div id=\"two\" class=\"record_collabo_after\">","            <div class=\"user_profile_circle\">","                <img id=\"two1\" src=\"/img/JMH_Profile_Picture.png\" title=\"record_collabo_after\">","                 <strong>X</strong> ","                <img id=\"two2\" src=\"/img/KHJ_Profile_Picture.png\" title=\"record_collabo_after\">","           </div>","           <div id=\"two3\" class=\"Name_Tag\">","              <p title=\"subject\">민호x혜진 작품!</p>   ","              <p title=\"writer\">장민호,김혜진</p>","           </div>","          </div>","          ","          <div id=\"two\" class=\"record_collabo_after\">","            <div class=\"user_profile_circle\">","                <img id=\"two1\" src=\"/img/JMH_Profile_Picture.png\" title=\"record_collabo_after\">","                 <strong>X</strong> ","                <img id=\"two2\" src=\"/img/KHJ_Profile_Picture.png\" title=\"record_collabo_after\">","           </div>","           <div id=\"two3\" class=\"Name_Tag\">","              <p title=\"subject\">민호x혜진 작품!</p>   ","              <p title=\"writer\">장민호,김혜진</p>","           </div>","          </div>","          <div id=\"icon\">","            <a href=\"#close\" title=\"modal_close\">×</a>","          </div>","        </p>","    </div>","</div>","    </div>","  </body>","</html>",""]}],[{"start":{"row":10,"column":0},"end":{"row":56,"column":4},"action":"remove","lines":["","    .point img {","       position:absolute;","       left: 390px;","       top:37px;","       width:40px;","       height:40px;","","    }","","    .font p {","        font-weight:bold;","    }","","    #imgbox{","    width: 60%;","    height: 50%;","    }","","    img[title=\"play_button\"]{","        position:absolute;","        left:100px;","        top:100px;","        width:50px;","        height:50px;","","  \t}","","    div img[title=\"user_profile\"]{","        position:relative;","        left:-350px;","  \t\twidth: 75px;","  \t\theight: 75px;","  \t\tborder-radius: 75px;","  \t\tborder: 4px solid #1f8a70;","  \t}","","","  \t.user_comment p {","  \t    position: relative;","  \t    display: inline-block;","  \t    top:-30px;","  \t    left:-320px;","  \t    border: 2px solid #1f8a70;","  \t    border-radius: 5px;","  \t    padding:5px;","  \t}"],"id":3},{"start":{"row":10,"column":0},"end":{"row":226,"column":6},"action":"insert","lines":["/*","    |**************************************************************************","    | 사용자 게시글 표시 부분","    |**************************************************************************","    */","    .imgbox{","      width: 1200px;","      height: 770px;  ","      position: absolute;","      margin-top: 100px;","      left: 350px;","      border: 8px solid #7aba66;","      border-radius: 10px;","    }","    .videobox{","      position: absolute;","      top: 100px;","      left:20px;","      padding: 20px;","      width: 550px;","    }","    .videobox img[title=\"first\"],.videobox img[title=\"second\"]{","      width: 250px;","      height: 250px;","    }","    .font{","      position: absolute;","      left: 630px;","      padding: 100px;","      font-size: 20px;","      font-weight: bold;","    }","    .point img {","      position: absolute;","      left: 50px;","      top: 80px;","      width: 40px;","      height: 40px;","    }","    .user_comment{","      width:1q00px;","      height:300px;","      position:relative;","      top:450px;","      margin-left: 40px;","    }","    .user_comment img[title=\"user_profile1\"]{","      border-radius:75px;","      width:100px;","      height:100px;","      ","      position: relative;","      top:55px;","    }","    .user_comment p{","      position:relative;","      display:inline-block;","      border:3px solid lightgreen;","      font-size:20px;","      padding:20px;","      border-radius:15px;","    }","    .user_comment p[title=\"user_profile1\"]{","      top:0px;","      margin-left:30px;","    }","    .user_comment p[title=\"user_profile2\"]{","      margin-left:300px;","    }","    .user_comment img[title=\"user_profile2\"]{","      border-radius:75px;","      width:100px;","      height:100px;","      margin: 15px;","      position: relative;","      float:right;","    }","    #buttonBox{","      margin-bottom:40px;","    }","    input[type=\"button\"]{","        margin-left: 10px;","        background:#1AAB8A;","        color:#fff;","        border:none;","        position:relative;","        margin-top:600px;","        left:370px;","        width:100px;","        height:40px;","        font-size:20px;","        padding:5px 10px;","        cursor:pointer;","    }","    input[type=\"button\"]:hover{","        background:#fff;","        color:#1AAB8A;","    }","    /**************************************************************************","    | 모달 팝업 관련 css","    |**************************************************************************/","  \t#bottom_buttonBox>a{","      position:relative;","      float:right;","      top:-80px;","      background:#1AAB8A;","      color:#fff;","      border:none;","      width:200px;","      height:30px;","      font-size:20px;","      padding:5px 10px;","      cursor:pointer;","      text-align:center;","      margin-bottom:40px;","      text-decoration:none;","    }","    #bottom_buttonBox>a:hover{","      background-color:white;","      color:#1AAB8A;","    }","  \t.another_play {","      position: fixed;","      top: 0;","      right: 0;","      bottom: 0;","      left: 0;","      background: rgba(0, 0, 0, 0.8);","      opacity:0;","      -webkit-transition: opacity 400ms ease-in;","      -moz-transition: opacity 400ms ease-in;","      transition: opacity 400ms ease-in;","      pointer-events: none;","    }","    ","    .another_play:target {","        opacity:1;","        pointer-events: auto;","    }","    ","    .another_play > div {","    \tposition: absolute;","    \ttop: 25%;","    \tleft: 25%;","    \twidth: 50%;","    \theight: 50%;","    \tpadding: 16px;","    \tborder: 16px solid #3ea480;","    \tbackground-color: white;","    \toverflow: auto;\t","    }","    ","    a[title=\"modal_close\"]{","      position:absolute;","      top:10px;","      right:20px;","      text-decoration:none;","      font-size:40px;","      text-align:center;","      border-radius:50px;","      background-color:  #FF5050;","      color:white;","      width:40px;","      height:40px;","      font-family: 'Passion One', cursive;","    }","  /***************************************************************************","  | 랭킹 게시물 보여주는 하얀색 div안에 프로필 사진 및 연주 사진 크기 설정","  |***************************************************************************/","     .another_play img[title=\"record_collabo_before\"]{","        width: 150px;","        height: 150px;","        border-radius: 75px;","     }","     .another_play img[title=\"record_collabo_after\"]{","        width: 100px;","        height: 100px;","        border-radius: 70px;","     }","     .another_play img[title=\"video_collabo_before\"]{","        width: 200px;","        height: 150px;","     }","     .another_play img[title=\"video_collabo_after\"]{","        width: 100px;","        height: 150px;","     }","     ","  /***************************************************************************","  | 랭킹 게시물 보여주는 하얀색 div의 속성설정","  |***************************************************************************/","     .record_collabo_after { ","        position: relative;","        margin-top: 0px;","        width: 250px;","        height:280px;","        margin-left: 20px;","        margin-right: 20px;","        display: inline-block;","        border: 4px solid #6d928c;","        }","  /***************************************************************************","  | 랭킹 게시물 보여주는 하얀색 div안에 게시물 제목과 게시자가 표시되는 frame(까만색 네모박스)","  |***************************************************************************/","     .Name_Tag {","        position:relative;","        text-align:center;","        margin:auto;","        width: 210px;","        height:80px;","        top: 20px;","        border: 4px solid #6d928c;","     }","     .user_profile_circle{","       margin-left:5%;","       margin-top:20%;","     }"]}],[{"start":{"row":6,"column":4},"end":{"row":8,"column":4},"action":"remove","lines":["<link rel=\"stylesheet\" href=\"/css/Select.css?var=<?=filemtime('./css/Select.css');?>\">","    <link rel=\"stylesheet\" href=\"/css/Before_View.css?var=<?=filemtime('./css/Before_View.css');?>\">","    "],"id":4}],[{"start":{"row":239,"column":71},"end":{"row":240,"column":72},"action":"remove","lines":["","        <img title=\"second\" src=\"/img/JSM.png\" width=\"250\" height=\"250\">"],"id":5}],[{"start":{"row":257,"column":8},"end":{"row":258,"column":54},"action":"remove","lines":["<p title=\"user_profile2\"> 와 베이스에다가 신디 치니까 정말 재미있네요 ㅎㅎㅎ 다음에도 같이해요! </p>","        <img title=\"user_profile2\" src=\"/img/JNH.png\">"],"id":6}],[{"start":{"row":256,"column":80},"end":{"row":257,"column":8},"action":"remove","lines":["","        "],"id":7}],[{"start":{"row":29,"column":32},"end":{"row":29,"column":62},"action":"remove","lines":[",.videobox img[title=\"second\"]"],"id":8}],[{"start":{"row":30,"column":13},"end":{"row":30,"column":16},"action":"remove","lines":["250"],"id":9},{"start":{"row":30,"column":13},"end":{"row":30,"column":14},"action":"insert","lines":["5"]}],[{"start":{"row":30,"column":14},"end":{"row":30,"column":15},"action":"insert","lines":["0"],"id":10}],[{"start":{"row":30,"column":15},"end":{"row":30,"column":16},"action":"insert","lines":["0"],"id":11}]]},"ace":{"folds":[],"scrolltop":4620.167070388794,"scrollleft":0,"selection":{"start":{"row":289,"column":65},"end":{"row":289,"column":66},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":334,"mode":"ace/mode/php"}},"timestamp":1497718920829,"hash":"3da9680feeb8a58eb96e8619205dc908e278e1d7"}