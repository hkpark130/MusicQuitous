<link rel="stylesheet" href="/css/bandchallenge/nav.css?var=<?=filemtime('./css/bandchallenge/nav.css');?>" type="text/css" />
<div id="mySidenav" class="sidenav">
  <a href="{{ url('/recordalbum')}}" id="albumn">음원을 기다려요
  <img src="/img/albumn.png" title="albumn"></a>
  
  <a href="{{ url('/recordbefore')}}"  id="Rbefore">Record 합주를 기다려요
  <img src="/img/recordbefore.png" title="Rbefore"></a>
  
  <a href="{{ url('/recordafter')}}" id="Rafter">Record 합주를 했어요
  <img src="/img/recordafter.png" title="Rafter" ></a>
  
  <a href="{{ url('/videobefore')}}" id="Vbefore">Video 합주를 기다려요
  <img src="/img/videobefore.png" title="Vbefore" ></a>
  
  <a href="{{ url('/videoafter')}}" id="Vafter" name="Vafter">Video 합주를 했어요
  <img src="/img/videoafter.png" title="Vafter" ></a>
</div>