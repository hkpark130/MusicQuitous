{"filter":false,"title":"IonicMusicController.php","tooltip":"/harmony_project/app/Http/Controllers/ionic/IonicMusicController.php","undoManager":{"mark":96,"position":96,"stack":[[{"start":{"row":25,"column":0},"end":{"row":34,"column":5},"action":"insert","lines":["function midiGood($id){","        $midi = Midis::find($id);","        $goods_cnt = $midi['goods'];","       $goods_cnt++;","        ","      DB::table('midis')->where('id',$id)->update(['goods' => $goods_cnt]);","       ","        ","        echo json_encode($goods_cnt);","    }"],"id":100}],[{"start":{"row":25,"column":0},"end":{"row":25,"column":4},"action":"insert","lines":["    "],"id":101}],[{"start":{"row":34,"column":5},"end":{"row":35,"column":0},"action":"insert","lines":["",""],"id":102},{"start":{"row":35,"column":0},"end":{"row":35,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":25,"column":13},"end":{"row":25,"column":14},"action":"remove","lines":["m"],"id":103}],[{"start":{"row":25,"column":13},"end":{"row":25,"column":14},"action":"remove","lines":["i"],"id":104}],[{"start":{"row":25,"column":13},"end":{"row":25,"column":14},"action":"remove","lines":["d"],"id":105}],[{"start":{"row":25,"column":13},"end":{"row":25,"column":14},"action":"remove","lines":["i"],"id":106}],[{"start":{"row":25,"column":13},"end":{"row":25,"column":14},"action":"insert","lines":["B"],"id":107}],[{"start":{"row":25,"column":14},"end":{"row":25,"column":15},"action":"insert","lines":["o"],"id":108}],[{"start":{"row":25,"column":15},"end":{"row":25,"column":16},"action":"insert","lines":["a"],"id":109}],[{"start":{"row":25,"column":16},"end":{"row":25,"column":17},"action":"insert","lines":["r"],"id":110}],[{"start":{"row":25,"column":17},"end":{"row":25,"column":18},"action":"insert","lines":["d"],"id":111}],[{"start":{"row":25,"column":13},"end":{"row":25,"column":14},"action":"remove","lines":["B"],"id":112}],[{"start":{"row":25,"column":13},"end":{"row":25,"column":14},"action":"insert","lines":["n"],"id":113}],[{"start":{"row":25,"column":13},"end":{"row":25,"column":14},"action":"remove","lines":["n"],"id":114}],[{"start":{"row":25,"column":13},"end":{"row":25,"column":14},"action":"insert","lines":["b"],"id":115}],[{"start":{"row":26,"column":16},"end":{"row":26,"column":21},"action":"remove","lines":["Midis"],"id":116},{"start":{"row":26,"column":16},"end":{"row":26,"column":17},"action":"insert","lines":["b"]}],[{"start":{"row":26,"column":17},"end":{"row":26,"column":18},"action":"insert","lines":["a"],"id":117}],[{"start":{"row":26,"column":18},"end":{"row":26,"column":19},"action":"insert","lines":["n"],"id":118}],[{"start":{"row":26,"column":19},"end":{"row":26,"column":20},"action":"insert","lines":["d"],"id":119}],[{"start":{"row":26,"column":20},"end":{"row":26,"column":21},"action":"insert","lines":["_"],"id":120}],[{"start":{"row":26,"column":21},"end":{"row":26,"column":22},"action":"insert","lines":["a"],"id":121}],[{"start":{"row":26,"column":22},"end":{"row":26,"column":23},"action":"insert","lines":["u"],"id":122}],[{"start":{"row":26,"column":23},"end":{"row":26,"column":24},"action":"insert","lines":["d"],"id":123}],[{"start":{"row":26,"column":24},"end":{"row":26,"column":25},"action":"insert","lines":["i"],"id":124}],[{"start":{"row":26,"column":25},"end":{"row":26,"column":26},"action":"insert","lines":["o"],"id":125}],[{"start":{"row":26,"column":16},"end":{"row":26,"column":26},"action":"remove","lines":["band_audio"],"id":126},{"start":{"row":26,"column":16},"end":{"row":26,"column":26},"action":"insert","lines":["BandAudios"]}],[{"start":{"row":26,"column":12},"end":{"row":26,"column":13},"action":"remove","lines":["i"],"id":127}],[{"start":{"row":26,"column":11},"end":{"row":26,"column":12},"action":"remove","lines":["d"],"id":128}],[{"start":{"row":26,"column":10},"end":{"row":26,"column":11},"action":"remove","lines":["i"],"id":129}],[{"start":{"row":26,"column":9},"end":{"row":26,"column":10},"action":"remove","lines":["m"],"id":130}],[{"start":{"row":26,"column":9},"end":{"row":26,"column":10},"action":"insert","lines":["b"],"id":131}],[{"start":{"row":26,"column":10},"end":{"row":26,"column":11},"action":"insert","lines":["o"],"id":132}],[{"start":{"row":26,"column":11},"end":{"row":26,"column":12},"action":"insert","lines":["a"],"id":133}],[{"start":{"row":26,"column":12},"end":{"row":26,"column":13},"action":"insert","lines":["r"],"id":134}],[{"start":{"row":26,"column":13},"end":{"row":26,"column":14},"action":"insert","lines":["d"],"id":135}],[{"start":{"row":27,"column":21},"end":{"row":27,"column":26},"action":"remove","lines":["$midi"],"id":136},{"start":{"row":27,"column":21},"end":{"row":27,"column":27},"action":"insert","lines":["$board"]}],[{"start":{"row":30,"column":17},"end":{"row":30,"column":22},"action":"remove","lines":["midis"],"id":137},{"start":{"row":30,"column":17},"end":{"row":30,"column":18},"action":"insert","lines":["b"]}],[{"start":{"row":30,"column":18},"end":{"row":30,"column":19},"action":"insert","lines":["n"],"id":138}],[{"start":{"row":30,"column":18},"end":{"row":30,"column":19},"action":"remove","lines":["n"],"id":139}],[{"start":{"row":30,"column":18},"end":{"row":30,"column":19},"action":"insert","lines":["o"],"id":140}],[{"start":{"row":30,"column":19},"end":{"row":30,"column":20},"action":"insert","lines":["a"],"id":141}],[{"start":{"row":30,"column":20},"end":{"row":30,"column":21},"action":"insert","lines":["r"],"id":142}],[{"start":{"row":30,"column":21},"end":{"row":30,"column":22},"action":"insert","lines":["d"],"id":143}],[{"start":{"row":30,"column":22},"end":{"row":30,"column":23},"action":"insert","lines":["_"],"id":144}],[{"start":{"row":30,"column":23},"end":{"row":30,"column":24},"action":"insert","lines":["a"],"id":145}],[{"start":{"row":30,"column":24},"end":{"row":30,"column":25},"action":"insert","lines":["u"],"id":146}],[{"start":{"row":30,"column":25},"end":{"row":30,"column":26},"action":"insert","lines":["d"],"id":147}],[{"start":{"row":30,"column":26},"end":{"row":30,"column":27},"action":"insert","lines":["i"],"id":148}],[{"start":{"row":30,"column":27},"end":{"row":30,"column":28},"action":"insert","lines":["o"],"id":149}],[{"start":{"row":30,"column":28},"end":{"row":30,"column":29},"action":"insert","lines":["s"],"id":150}],[{"start":{"row":28,"column":7},"end":{"row":28,"column":8},"action":"insert","lines":[" "],"id":151}],[{"start":{"row":25,"column":13},"end":{"row":25,"column":22},"action":"remove","lines":["boardGood"],"id":152},{"start":{"row":25,"column":13},"end":{"row":25,"column":22},"action":"insert","lines":["boardGood"]}],[{"start":{"row":25,"column":28},"end":{"row":26,"column":0},"action":"insert","lines":["",""],"id":153},{"start":{"row":26,"column":0},"end":{"row":26,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":26,"column":8},"end":{"row":26,"column":9},"action":"insert","lines":["d"],"id":154}],[{"start":{"row":26,"column":8},"end":{"row":26,"column":9},"action":"remove","lines":["d"],"id":155}],[{"start":{"row":26,"column":8},"end":{"row":26,"column":9},"action":"insert","lines":["d"],"id":156}],[{"start":{"row":26,"column":9},"end":{"row":26,"column":10},"action":"insert","lines":["u"],"id":157}],[{"start":{"row":26,"column":10},"end":{"row":26,"column":11},"action":"insert","lines":["m"],"id":158}],[{"start":{"row":26,"column":11},"end":{"row":26,"column":12},"action":"insert","lines":["p"],"id":159}],[{"start":{"row":26,"column":12},"end":{"row":26,"column":13},"action":"insert","lines":["o"],"id":160}],[{"start":{"row":26,"column":12},"end":{"row":26,"column":13},"action":"remove","lines":["o"],"id":161}],[{"start":{"row":26,"column":12},"end":{"row":26,"column":14},"action":"insert","lines":["()"],"id":162}],[{"start":{"row":26,"column":14},"end":{"row":26,"column":15},"action":"insert","lines":[";"],"id":163}],[{"start":{"row":26,"column":13},"end":{"row":26,"column":14},"action":"insert","lines":["$"],"id":164}],[{"start":{"row":26,"column":14},"end":{"row":26,"column":15},"action":"insert","lines":["i"],"id":165}],[{"start":{"row":26,"column":15},"end":{"row":26,"column":16},"action":"insert","lines":["d"],"id":166}],[{"start":{"row":31,"column":22},"end":{"row":31,"column":23},"action":"remove","lines":["_"],"id":167}],[{"start":{"row":31,"column":22},"end":{"row":31,"column":23},"action":"insert","lines":["_"],"id":168}],[{"start":{"row":31,"column":17},"end":{"row":31,"column":18},"action":"remove","lines":["b"],"id":169}],[{"start":{"row":31,"column":17},"end":{"row":31,"column":18},"action":"remove","lines":["o"],"id":170}],[{"start":{"row":31,"column":17},"end":{"row":31,"column":18},"action":"remove","lines":["a"],"id":171}],[{"start":{"row":31,"column":17},"end":{"row":31,"column":18},"action":"remove","lines":["r"],"id":172}],[{"start":{"row":31,"column":17},"end":{"row":31,"column":18},"action":"remove","lines":["d"],"id":173}],[{"start":{"row":31,"column":17},"end":{"row":31,"column":18},"action":"insert","lines":["b"],"id":174}],[{"start":{"row":31,"column":18},"end":{"row":31,"column":19},"action":"insert","lines":["a"],"id":175}],[{"start":{"row":31,"column":19},"end":{"row":31,"column":20},"action":"insert","lines":["n"],"id":176}],[{"start":{"row":31,"column":20},"end":{"row":31,"column":21},"action":"insert","lines":["d"],"id":177}],[{"start":{"row":190,"column":32},"end":{"row":191,"column":0},"action":"insert","lines":["",""],"id":178},{"start":{"row":191,"column":0},"end":{"row":191,"column":7},"action":"insert","lines":["       "]}],[{"start":{"row":191,"column":7},"end":{"row":194,"column":69},"action":"insert","lines":["return view('mypage/album_music_play')->with('userMusics',$userMusics)->with('allMusics',$allMusics)","        ->with('albumNumber',$userID)->with('sessionUser',$sessionUser)->with('albumMusics',$albumMusics)","        ->with('imageFile',$imageFile)->with('partici_name',$partici_name)->with('midi',$midi)->with('album_particis',$album_particis)","        ->with('boards',$boards)->with('albumMusics2',$albumMusics2);"],"id":179}],[{"start":{"row":194,"column":69},"end":{"row":195,"column":0},"action":"insert","lines":["",""],"id":180},{"start":{"row":195,"column":0},"end":{"row":195,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":200,"column":0},"end":{"row":201,"column":0},"action":"insert","lines":["         array_push($my_music_list,$midi);",""],"id":181}],[{"start":{"row":200,"column":0},"end":{"row":201,"column":0},"action":"insert","lines":["         array_push($my_music_list,$midi);",""],"id":182}],[{"start":{"row":200,"column":8},"end":{"row":201,"column":42},"action":"remove","lines":[" array_push($my_music_list,$midi);","         array_push($my_music_list,$midi);"],"id":183}],[{"start":{"row":199,"column":35},"end":{"row":199,"column":40},"action":"remove","lines":["$midi"],"id":184},{"start":{"row":199,"column":35},"end":{"row":199,"column":48},"action":"insert","lines":["$albumMusics2"]}],[{"start":{"row":194,"column":69},"end":{"row":194,"column":71},"action":"insert","lines":["*/"],"id":185},{"start":{"row":191,"column":6},"end":{"row":191,"column":8},"action":"insert","lines":["/*"]}],[{"start":{"row":199,"column":35},"end":{"row":199,"column":48},"action":"remove","lines":["$albumMusics2"],"id":186},{"start":{"row":199,"column":35},"end":{"row":199,"column":42},"action":"insert","lines":["$boards"]}],[{"start":{"row":199,"column":0},"end":{"row":200,"column":0},"action":"insert","lines":["         array_push($my_music_list,$partici_name);",""],"id":187}],[{"start":{"row":199,"column":35},"end":{"row":199,"column":48},"action":"remove","lines":["$partici_name"],"id":188},{"start":{"row":199,"column":35},"end":{"row":199,"column":36},"action":"insert","lines":["m"]},{"start":{"row":199,"column":36},"end":{"row":199,"column":37},"action":"insert","lines":["i"]}],[{"start":{"row":199,"column":37},"end":{"row":199,"column":38},"action":"insert","lines":["d"],"id":189}],[{"start":{"row":199,"column":38},"end":{"row":199,"column":39},"action":"insert","lines":["i"],"id":190}],[{"start":{"row":199,"column":35},"end":{"row":199,"column":36},"action":"insert","lines":["$"],"id":191}],[{"start":{"row":98,"column":8},"end":{"row":100,"column":75},"action":"insert","lines":["return view('mypage/album_music_list')->with('userMusics',$userMusics)","        ->with('albumNumber',$userID)->with('sessionUser',$sessionUser)->with('albumMusics',$albumMusics)","        ->with('imageFile',$imageFile)->with('partici_name',$partici_name);"],"id":192}],[{"start":{"row":100,"column":75},"end":{"row":101,"column":0},"action":"insert","lines":["",""],"id":193},{"start":{"row":101,"column":0},"end":{"row":101,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":109,"column":0},"end":{"row":110,"column":0},"action":"insert","lines":["         array_push($my_album_list,$midi);",""],"id":194}],[{"start":{"row":109,"column":35},"end":{"row":109,"column":40},"action":"remove","lines":["$midi"],"id":195},{"start":{"row":109,"column":35},"end":{"row":109,"column":47},"action":"insert","lines":["$albumMusics"]}],[{"start":{"row":100,"column":75},"end":{"row":100,"column":77},"action":"insert","lines":["*/"],"id":196},{"start":{"row":98,"column":7},"end":{"row":98,"column":9},"action":"insert","lines":["/*"]}]]},"ace":{"folds":[],"scrolltop":1560,"scrollleft":0,"selection":{"start":{"row":82,"column":12},"end":{"row":82,"column":32},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":309,"mode":"ace/mode/php"}},"timestamp":1502843191344,"hash":"994fa8d4533100bf8492839244591c387c19fea9"}