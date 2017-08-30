{"filter":false,"title":"login.blade.php","tooltip":"/harmony_project/resources/views/auth/login.blade.php","undoManager":{"mark":23,"position":23,"stack":[[{"start":{"row":4,"column":4},"end":{"row":160,"column":26},"action":"remove","lines":["<script src=\"/scripts/same_time_play.js\"></script>","    ","    <style>","        /*","        |**************************************************************************","        | 음원에 대한 정보들의 위치를 지정해주고 경계선을 그어준다.","        |**************************************************************************","        */","        .imgbox{","            width:30%;","            font-family: Mouse Memoirs, Hanna, gulim;","            position: absolute;","            top: 35%; left: 27%;","            border: 8px solid #7ABA66;","            border-radius: 10px;","            background-color: white;","          }","          .imgbox>img{","            float:left;","            margin: 20px;","            width:50%;","            height:50%;","          }","          /*","          |**************************************************************************","          | p태그의 padding 및 글자크기 지정","          |**************************************************************************","          */","          .font{","            padding-top:15%;","            padding-bottom:10%;","            font-size: 30px;","           }","           /*","            |**************************************************************************","            | 버튼의 이미지와 이벤트 및 글자크기를 지정해준다","            |**************************************************************************","            */","            form>#buttonBox{","              margin-top: 0px;","              margin-left: 5px;","              background:#1AAB8A;","              color:white;","              border:none;","              position:relative;","              height:30px;","              font-size:20px;","              padding:0 0.8em;","              cursor:pointer;","              /*transition:400ms ease all;*/","              /*outline:none;*/","            }","            /*","            |**************************************************************************","            | 마우스가 올려 졌을 때의 색상을 지정","            |**************************************************************************","            */","            form>#buttonBox:hover{","              background:#fff;","              color:#1AAB8A;","            }","            /*","            |**************************************************************************","            | 마우스가 올려 졌을 때 위아래 나타나는 선의 위치를 지정해준다.","            |**************************************************************************/","            form>#buttonBox:before,form>#buttonBox:after{","              content:'';    /*선택 요소의 앞이나 뒤에 컨텐트를 붙인다.*/","              position:absolute;","              top:0;","              right:0;","              height:2px;","              width:0;","              background: #1AAB8A;","              text-decoration: none;","              /*transition:400ms ease all;*/","            }","            /*","            |**************************************************************************","            |  마우스가 버튼에 올려졌을 때 선을 나타나게 해주는 css","            |**************************************************************************","            */","            form>#buttonBox:after{","              top:inherit;","              left: 0;","              bottom:0;","            }","            /*","            |**************************************************************************","            | 마우스를 올렸을때 선의 길이를 지정해줄 때 사용한다","            | transition:800ms ease all; = 선이 나타나는 시간을 조정해준다.","            |**************************************************************************","            */","            form>#buttonBox:hover:before,form>#buttonBox:hover:after{","              width:100%;","              transition:800ms ease all;","            }","            /*","            |**************************************************************************","            | button의 위치를 padding을 통해 지정해준다.","            |**************************************************************************","            */","            #buttonBox{","              padding-left: 40px;","              padding-top: 40px;","            }","            .styled-select{","                overflow:auto;","                height:400px;","                border-radius: 5px; ","                border: 1px solid black; ","                position: absolute; ","                top:10px;","                left: 800px;","            }","            .styled-select>div{","                text-align: center; ","                font-size: 25px","            }","    </style>","","<div class=\"top\">","    @include('menu.topmenu')","</div>","","<div class=\"imgbox\">","    <img id=\"img1\" src=\"<?php echo '/midi/'.$midi['path'].'/'.$midi['img'];?>\">","","    <div class=\"font\">","        <p>음원명 : <?php echo $midi['music_name'];?></p>","        <p>작곡가 : <?php echo $midi['composer'];?></p>","        <p>장르 : <?php echo $midi['genre'];?></p>","    </div>{{--contents 의 div--}}","","    <div class=\"styled-select\" style=\"\">","        <div style=\"\">악기 리스트</div>","        <?php","      foreach ($insts as $inst){","          $inst_src = '/midi/'.$midi['path'].'/'.$inst['inst_name'];","","          echo \"<div style='border-radius: 5px;margin: 5px;padding: 5px;border: 1px solid black'>\".substr($inst['inst_name'],0,-4).\" : <input type='checkbox' checked name='musics[]' value='$inst[inst_name]'/><br>\";","          echo \"<audio name='my_audio[]' controls preload='none'>","                    <source src='$inst_src' type='audio/mpeg'>","                </audio></div>\";","      }","    ?>","    </div>{{--layer의 div--}}","    <div>","        <form name=\"recordForm\" action=\"/BandChallenge/audioRecord\" method=\"post\">","            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token() }}\">","            <input type=\"hidden\" name=\"music_checked_list\" value=\"\">","            <input type=\"hidden\" name=\"midi_id\" value=\"{{ $midi['id'] }}\">","            <button id=\"buttonBox\" onclick=\"recordPage();\">연주하기</button>","            <button id=\"buttonBox\" onclick=\"allCheck();\">전체선택</button>","            <input id=\"buttonBox\"type=\"button\" name=\"listen_btn\" onclick=\"init();\" value=\"▶\">","        </form>","    </div>","</div>  {{--music의 div--}}"],"id":2}],[{"start":{"row":4,"column":4},"end":{"row":4,"column":5},"action":"insert","lines":["t"],"id":3}],[{"start":{"row":4,"column":5},"end":{"row":4,"column":6},"action":"insert","lines":["e"],"id":4}],[{"start":{"row":4,"column":6},"end":{"row":4,"column":7},"action":"insert","lines":["s"],"id":5}],[{"start":{"row":4,"column":7},"end":{"row":4,"column":8},"action":"insert","lines":["t"],"id":6}],[{"start":{"row":4,"column":4},"end":{"row":4,"column":8},"action":"remove","lines":["test"],"id":7},{"start":{"row":4,"column":4},"end":{"row":4,"column":5},"action":"insert","lines":["l"]}],[{"start":{"row":4,"column":5},"end":{"row":4,"column":6},"action":"insert","lines":["o"],"id":8}],[{"start":{"row":4,"column":6},"end":{"row":4,"column":7},"action":"insert","lines":["c"],"id":9}],[{"start":{"row":4,"column":7},"end":{"row":4,"column":8},"action":"insert","lines":["a"],"id":10}],[{"start":{"row":4,"column":8},"end":{"row":4,"column":9},"action":"insert","lines":["t"],"id":11}],[{"start":{"row":4,"column":9},"end":{"row":4,"column":10},"action":"insert","lines":["o"],"id":12}],[{"start":{"row":4,"column":10},"end":{"row":4,"column":11},"action":"insert","lines":["n"],"id":13}],[{"start":{"row":4,"column":11},"end":{"row":4,"column":12},"action":"insert","lines":["."],"id":14}],[{"start":{"row":4,"column":12},"end":{"row":4,"column":13},"action":"insert","lines":["h"],"id":15}],[{"start":{"row":4,"column":13},"end":{"row":4,"column":14},"action":"insert","lines":["r"],"id":16}],[{"start":{"row":4,"column":14},"end":{"row":4,"column":15},"action":"insert","lines":["e"],"id":17}],[{"start":{"row":4,"column":15},"end":{"row":4,"column":16},"action":"insert","lines":["f"],"id":18}],[{"start":{"row":4,"column":4},"end":{"row":4,"column":16},"action":"remove","lines":["locaton.href"],"id":19},{"start":{"row":4,"column":4},"end":{"row":4,"column":50},"action":"insert","lines":["<script> location.replace('/login'); </script>"]}],[{"start":{"row":4,"column":3},"end":{"row":4,"column":4},"action":"insert","lines":["/"],"id":20}],[{"start":{"row":4,"column":4},"end":{"row":4,"column":5},"action":"insert","lines":["/"],"id":21}],[{"start":{"row":4,"column":4},"end":{"row":4,"column":5},"action":"remove","lines":["/"],"id":22}],[{"start":{"row":4,"column":3},"end":{"row":4,"column":4},"action":"remove","lines":["/"],"id":23}],[{"start":{"row":4,"column":50},"end":{"row":4,"column":53},"action":"insert","lines":["-->"],"id":24},{"start":{"row":4,"column":4},"end":{"row":4,"column":8},"action":"insert","lines":["<!--"]}],[{"start":{"row":0,"column":0},"end":{"row":1,"column":0},"action":"remove","lines":["",""],"id":25,"ignore":true},{"start":{"row":0,"column":18},"end":{"row":0,"column":24},"action":"remove","lines":["layout"]},{"start":{"row":0,"column":18},"end":{"row":0,"column":21},"action":"insert","lines":["app"]},{"start":{"row":3,"column":0},"end":{"row":3,"column":56},"action":"remove","lines":["    <!--<script> location.replace('/login'); </script>--"]},{"start":{"row":3,"column":0},"end":{"row":66,"column":5},"action":"insert","lines":["<div class=\"container\">","    <div class=\"row\">","        <div class=\"col-md-8 col-md-offset-2\">","            <div class=\"panel panel-default\">","                <div class=\"panel-heading\">Login</div>","                <div class=\"panel-body\">","                    <form class=\"form-horizontal\" role=\"form\" method=\"POST\" action=\"{{ route('login') }}\">","                        {{ csrf_field() }}","","                        <div class=\"form-group{{ $errors->has('email') ? ' has-error' : '' }}\">","                            <label for=\"email\" class=\"col-md-4 control-label\">E-Mail Address</label>","","                            <div class=\"col-md-6\">","                                <input id=\"email\" type=\"email\" class=\"form-control\" name=\"email\" value=\"{{ old('email') }}\" required autofocus>","","                                @if ($errors->has('email'))","                                    <span class=\"help-block\">","                                        <strong>{{ $errors->first('email') }}</strong>","                                    </span>","                                @endif","                            </div>","                        </div>","","                        <div class=\"form-group{{ $errors->has('password') ? ' has-error' : '' }}\">","                            <label for=\"password\" class=\"col-md-4 control-label\">Password</label>","","                            <div class=\"col-md-6\">","                                <input id=\"password\" type=\"password\" class=\"form-control\" name=\"password\" required>","","                                @if ($errors->has('password'))","                                    <span class=\"help-block\">","                                        <strong>{{ $errors->first('password') }}</strong>","                                    </span>","                                @endif","                            </div>","                        </div>","","                        <div class=\"form-group\">","                            <div class=\"col-md-6 col-md-offset-4\">","                                <div class=\"checkbox\">","                                    <label>","                                        <input type=\"checkbox\" name=\"remember\" {{ old('remember') ? 'checked' : '' }}> Remember Me","                                    </label>","                                </div>","                            </div>","                        </div>","","                        <div class=\"form-group\">","                            <div class=\"col-md-8 col-md-offset-4\">","                                <button type=\"submit\" class=\"btn btn-primary\">","                                    Login","                                </button>","","                                <a class=\"btn btn-link\" href=\"{{ route('password.request') }}\">","                                    Forgot Your Password?","                                </a>","                            </div>","                        </div>","                    </form>","                </div>","            </div>","        </div>","    </div>","</div"]},{"start":{"row":68,"column":0},"end":{"row":69,"column":0},"action":"remove","lines":["",""]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":3,"column":0},"end":{"row":3,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1501766008324,"hash":"c2331da02ce380e7290c80c312ad8dc82a072515"}