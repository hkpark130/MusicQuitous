{"filter":false,"title":"2017_08_15_200520_create_band_videos_table.php","tooltip":"/harmony_project/database/migrations/2017_08_15_200520_create_band_videos_table.php","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":16,"column":12},"end":{"row":17,"column":33},"action":"remove","lines":["$table->increments('id');","            $table->timestamps();"],"id":2},{"start":{"row":16,"column":12},"end":{"row":29,"column":33},"action":"insert","lines":["$table->increments('id');","            $table->string('subject',200);","            $table->string('selected_instruments',500)->nullable();","            $table->integer('first_musician_id')->unsigned();","            $table->foreign('first_musician_id')->references('id')->on('users');","            $table->integer('writer_id')->unsigned();","            $table->foreign('writer_id')->references('id')->on('users');","            $table->integer('goods');","            $table->string('album_number')->nullable();","            $table->string('instrument')->nullable();","            $table->integer('midi_id')->unsigned();","            $table->foreign('midi_id')->references('id')->on('midis');","","            $table->timestamps();"]}]]},"ace":{"folds":[],"scrolltop":179,"scrollleft":0,"selection":{"start":{"row":28,"column":0},"end":{"row":28,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":8,"state":"php-doc-start","mode":"ace/mode/php"}},"timestamp":1502795273347,"hash":"8203aa5de76c812951b8f3292b1f27945bd04e51"}