
<head>
    <!-- 합쳐지고 최소화된 최신 CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    
    <!-- 부가적인 테마 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
    
    <!-- 합쳐지고 최소화된 최신 자바스크립트 -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<style>
@import url('https://fonts.googleapis.com/css?family=Josefin+Sans');
@import url(http://fonts.googleapis.com/earlyaccess/nanumgothic.css);

    /*----------------------------------------------------------------*/
    .topimg{
        width:100%;
        margin:0 auto;
    }
    .topimg img{
        display:block;
        width:20%;
        margin:40px auto;
    }
    .thumbnail a:hover{
        text-decoration:none;
        color:black;
    }
    .guildimg img{
        width:100%;
        height:150px;
    }
    .cardwidth{
        width:25%;
        margin:20px 0;
    }
    .guildbox{
        width:60%;
        margin:0 auto;
        background-color:#005f57;
    }
    p[title="guildname"]{
        font-size:18px;
    }
    p[title="guildmaster"]{
        font-size:12px;
    }
    .createguild{
        border:none;
        height:50px;
        border-radius:10px;
        color:#9d9d9d;
        background-color:#222222;
    }
    .createguild:hover{
        color:white;
    }
    .searchbtn{
        height:35px;
        margin-top:7px;
    }
    .searchgroup{
        margin-top:-10px;
    }
    /*
    .titlestyle p{
        font-size:70px;
        position:relative;
        top:100px;
    }
    .menualign{
        width:70%;
        margin:0px auto;
    }
    .menualign a{
        width:250px;
        font-size:20px;
        text-align:center;
    }
    
    
    .uguilds{
        width:300px;
        height:250px;
        margin:50px auto;
        margin-left:50px;
    }
    
    */
    #footer{
      margin-bottom : 3%;
      
    }
    
    #footer_text{
      font-family: 'Nanum Gothic', serif;
      font-size: 10px;
      
    }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<script language=javascript>
   $(document).ready(function(){
       $("#div1").load("test.html");
   });
       function GuildCheck(){
         window.open('guild/create','Guildck','width=1000,height=700');
       }
</script>
</head>
<body>
    
<!--
|**************************************************************************
| 페이지로고/상단우측메뉴/주메뉴 표시 view/menu/topmenu.blade.php
|**************************************************************************
-->
<div class="top">
    @include('menu.topmenu')
</div>
<div class="container">
    <div class="row">
        <div class="topimg">
            <img src="/img/guild.png"></img>
        </div>
    </div>
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">GuildMenu</a>
        </div>
        <ul class="nav navbar-nav">
          <li class="active"><a href='/guildmain'>Home</a></li>
          <?php 
          echo"
          <li><a href='guild/myguild/{$myguild[0]['guild_name']}'>Myguild</a></li>
          <li><button onclick='GuildCheck();' class='createguild'>GuildCreate</button></li>
        </ul>
        ";
        ?>
        <form class="navbar-form navbar-left">
          <div class="input-group searchgroup">
            <input type="text" class="form-control" placeholder="Search">
            <div class="input-group-btn">
              <button class="btn searchbtn" type="submit">
                <i class="glyphicon glyphicon-search"></i>
              </button>
            </div>
          </div>
        </form>
      </div>
    </nav>
    <div class="row">
    </div>
</div>
<div class="row text-center guildbox">
<?php
      foreach ($guilds as $guild) {
        echo "
        <div class='col-sm-4 cardwidth'>
            <div class='thumbnail'>
                <a href='/guild/guild_view/{$guild->id}'>
                    <div class='guildimg'>
                        <img src='/img/guildmark/{$guild->guild_mark}'>
                    </div>
                <p title='guildname'>{$guild->guild_name}</p>
                <p title='guildmaster'>MASTER : {$guild->guild_master}</p>
                    
                </a>
                
            </div>
        </div>
        ";
      }
    ?>
    </div>
        
<style type="text/css">
    #messages{
        border: 1px solid black;
        height: 300px;
        margin-bottom: 8px;
        overflow: scroll;
        padding: 5px;
    }
</style>
<p id = 'footer'>
  <pre id = 'footer_text'>
      <img src = "/img/logo2.png" width="60" height="30" align="left">                                                                                                                                                                                                                                               김대호 교수님(PM), 조나훔(조장), 박현경, 장민호, 김진영, 김혜진, 주성민
                                                                                                                                                                                                                                                     Copyright&copy; 2017 YoungjinCollege Harmony Team All rights reserved</pre>
                                                                                  
</p>
</body>

