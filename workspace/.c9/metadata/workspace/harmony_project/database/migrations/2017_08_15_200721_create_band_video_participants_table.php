{"filter":false,"title":"2017_08_15_200721_create_band_video_participants_table.php","tooltip":"/harmony_project/database/migrations/2017_08_15_200721_create_band_video_participants_table.php","ace":{"folds":[],"scrolltop":68,"scrollleft":0,"selection":{"start":{"row":14,"column":5},"end":{"row":14,"column":5},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":8,"state":"php-doc-start","mode":"ace/mode/php"}},"hash":"d1df89f9e8aaea217dc48a82f7cb6fdbfab238e0","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":16,"column":12},"end":{"row":17,"column":33},"action":"remove","lines":["$table->increments('id');","            $table->timestamps();"],"id":2},{"start":{"row":16,"column":12},"end":{"row":20,"column":44},"action":"insert","lines":["$table->integer('user_id')->unsigned();","            $table->foreign('user_id')->references('id')->on('users');","            $table->integer('band_audio_id')->unsigned();","            $table->foreign('band_audio_id')->references('id')->on('band_audios');","            $table->string('file_name',200);"]}]]},"timestamp":1502795282055}