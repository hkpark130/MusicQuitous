<?php

use Illuminate\Database\Seeder;

class MidisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ////////////////// 11111111////////////////////
        DB::table('midis')->insert([
            'music_name'    => 'Cheer UP',          // 뮤직 이름
            'path'          => 'CheerUp',           //폴더명
            'composer'      => 'TWICE(트와이스)',  //아티스트명 
            'genre'         => 'dance',             //장르
            'img'           => 'optimize.jpg',      //이미지
            ]);
        
        //////////////////// 2222222222////////////////////    
        // DB::table('midis')->insert([
        //     'music_name'    => 'Adelitas Way',       // 뮤직 이름
        //     'path'          => 'AdelitasWay',        //폴더명
        //     'composer'      => 'Scream(스크림)',     //아티스트명 
        //     'genre'         => 'rock',              //장르
        //     'img'           => 'adelitas.jpg',       //이미지
        //     ]);
        // //////////////////// 33333333////////////////////    
        // DB::table('midis')->insert([
        //     'music_name'    => 'TouchBy Touch',
        //     'path'          => 'TouchByTouch',     
        //     'composer'      => 'Joy',
        //     'genre'         => 'pop',
        //     'img'           => 'TouchBy.jpg',
        //     ]);
        // ////////////////////444444444////////////////////    
        // DB::table('midis')->insert([
        //     'music_name'    => 'Pizzcato Polka',
        //     'path'          => 'PizzcatoPolka',     
        //     'composer'      => 'Johann',
        //     'genre'         => 'classic',
        //     'img'           => 'Johann.jpg',
        //     ]);
        // //////////////////// 555555555/////////////////
        // DB::table('midis')->insert([
        //     'music_name'    => 'Ice Camel',
        //     'path'          => 'IceCamel',     
        //     'composer'      => 'Camel',
        //     'genre'         => 'pop',
        //     'img'           => 'hqdefault.jpg',
        //     ]);
        // //////////////////// 666666666///////////////////
        // DB::table('midis')->insert([
        //     'music_name'    => 'KerenAnn Not',
        //     'path'          => 'KerenAnnNot',     
        //     'composer'      => '403forbidden',
        //     'genre'         => 'pop',
        //     'img'           => 'KerenAnn.jpg',
        //     ]);
        ////////////////////77777777////////////////////
        DB::table('midis')->insert([
            'music_name'    => 'Southern Cross2011',
            'path'          => 'SouthernCross2011',     
            'composer'      => 'Camel',
            'genre'         => 'rock',
            'img'           => 'Southern.jpg',
            ]);
        //////////////////// 8888888888////////////////////   
        DB::table('midis')->insert([
            'music_name'    => '여자 대통령',
            'path'          => 'womanPresident',     
            'composer'      => 'GirlsDay',
            'genre'         => 'dance',
            'img'           => 'GirlsDay.jpg',
            ]);
        //////////////////// 99999999//////////////////    
        // DB::table('midis')->insert([
        //     'music_name'    => 'cygne my',
        //     'path'          => 'cygne',     
        //     'composer'      => 'Mozart',
        //     'genre'         => 'classic',
        //     'img'           => 'Mozart.jpg',
        //     ]);
        ////////////////////10 10 10 10 10////////////////////    
        DB::table('midis')->insert([
            'music_name'    => 'Tell Me',
            'path'          => 'TellMe',     
            'composer'      => 'WonderGirls',
            'genre'         => 'dance',
            'img'           => 'WonderGirls.jpg',
            ]);
        //////////////////// 11 11 11 11 11 11////////////////////    
        // DB::table('midis')->insert([
        //     'music_name'    => 'Grand Father',
        //     'path'          => 'Grandfather',     
        //     'composer'      => 'HenryClay',
        //     'genre'         => 'classic',
        //     'img'           => 'HenryClay.png',
        //     ]);
        //////////////////// 12 12 12 12 12 12 12///////////////////
        // DB::table('midis')->insert([
        //     'music_name'    => '징기스칸',
        //     'path'          => 'Wikipedia',     
        //     'composer'      => 'DschinghisKhan',
        //     'genre'         => 'pop',
        //     'img'           => 'Wikipedia.jpg',
        //     ]);
        // //////////////////// 13 13 13 13 13 13 13///////////////////    
        // DB::table('midis')->insert([
        //     'music_name'    => 'WhatTheHell',
        //     'path'          => 'AvrilLavigne',     
        //     'composer'      => '에이브릴 라빈',
        //     'genre'         => 'rock',
        //     'img'           => 'AvrilLavigne.jpg',
        //     ]);
        // //////////////////// 14 14 14 14 14 14 14///////////////////    
        // DB::table('midis')->insert([
        //     'music_name'    => '스물셋',
        //     'path'          => 'IUseumulset',     
        //     'composer'      => '아이유',
        //     'genre'         => 'dance',
        //     'img'           => 'iufanmeeting.jpg',
        //     ]);
        // //////////////////// 15 15 15 15 15 15 15///////////////////
        // DB::table('midis')->insert([
        //     'music_name'    => '왕벌의비행',
        //     'path'          => 'Bumblebee',     
        //     'composer'      => '림스키',
        //     'genre'         => 'classic',
        //     'img'           => 'Bumblebee.jpg',
        //     ]);
        // //////////////////// 16 16 16 16 16 16 16///////////////////    
        // DB::table('midis')->insert([
        //     'music_name'    => 'MamaDo',
        //     'path'          => 'pixielottMama',     
        //     'composer'      => '픽시로트',
        //     'genre'         => 'pop',
        //     'img'           => 'pixielot.jpg',
        //     ]);
        //////////////////// 17 17 17 17 17 17 17///////////////////
        DB::table('midis')->insert([
            'music_name'    => 'Steelheart',
            'path'          => 'shesgone',     
            'composer'      => '스틸하트',
            'genre'         => 'rock',
            'img'           => 'shesgone.jpg',
            ]);
        //////////////////// 18 18 18 18 18 18 18///////////////////
        // DB::table('midis')->insert([
        //     'music_name'    => '라붐푱푱',
        //     'path'          => 'ShootingLove',     
        //     'composer'      => '라붐',
        //     'genre'         => 'dance',
        //     'img'           => 'Shooting.png',
        //     ]);
        // //////////////////// 19 19 19 19 19 19 19///////////////////    
        // DB::table('midis')->insert([
        //     'music_name'    => '라데츠키 행진곡',
        //     'path'          => 'RadetzkyMarch',     
        //     'composer'      => '요한슈트라우스',
        //     'genre'         => 'classic',
        //     'img'           => 'Radetzky.jpg',
        //     ]);
        //////////////////// 20 20 20 20 20 20 20///////////////////
        DB::table('midis')->insert([
            'music_name'    => 'TheBeatlesHey',
            'path'          => 'HEYJUDE',     
            'composer'      => '비틀즈',
            'genre'         => 'pop',
            'img'           => 'HEYJUDES.jpg',
            ]);
        //////////////////// 21 21 21 21 21 21 21///////////////////    
        DB::table('midis')->insert([
            'music_name'    => 'GatesOfBabylon',
            'path'          => 'Rainbow',     
            'composer'      => '레인보우',
            'genre'         => 'rock',
            'img'           => 'hqdefault.jpg',
            ]);
        //////////////////// 22 22 22 22 22 22 22///////////////////    
        DB::table('midis')->insert([
            'music_name'    => 'OhISwear',
            'path'          => 'ISwear',     
            'composer'      => '씨스타',
            'genre'         => 'dance',
            'img'           => 'Swear.jpg',
            ]);
        //////////////////// 23 23 23 23 23 23 23///////////////////    
        // DB::table('midis')->insert([
        //     'music_name'    => 'CelebratedChopWaltz',
        //     'path'          => 'Celebrated',     
        //     'composer'      => '유피미아앨런',
        //     'genre'         => 'classic',
        //     'img'           => 'Waltz.jpg',
        //     ]);
        // //////////////////// 24 24 24 24 24 24 24///////////////////    
        // DB::table('midis')->insert([
        //     'music_name'    => 'EminemStan',
        //     'path'          => 'ShortVersion',     
        //     'composer'      => '에미넴',
        //     'genre'         => 'pop',
        //     'img'           => 'Version.jpg',
        //     ]); 
        //////////////////// 25 25 발표시연 25 25 25///////////////////
        DB::table('midis')->insert([
            'music_name'    => '시간을 달려서',
            'path'          => 'aladyfriend',     
            'composer'      => '여자친구',
            'genre'         => 'dance',
            'img'           => 'maxresdefault.jpg',
            ]);
        //////////////////// 26 26 발표시연 26 26 26///////////////////
        DB::table('midis')->insert([
            'music_name'    => 'ILuvIt',
            'path'          => 'PsyILuvIt',     
            'composer'      => '싸이',
            'genre'         => 'dance',
            'img'           => 'PSYILUV.jpg',
            ]);
        //////////////////// 27 27 발표시연 27 27 27///////////////////
        // DB::table('midis')->insert([
        //     'music_name'    => '레퀴엠',
        //     'path'          => 'minor',     
        //     'composer'      => '모차르트',
        //     'genre'         => 'classic',
        //     'img'           => 'maxres.jpg',
        //     ]);
        // //////////////////// 28 28 발표시연 28 28 28///////////////////
        // DB::table('midis')->insert([
        //     'music_name'    => 'ScorpionsStillLovingYou',
        //     'path'          => 'Scorpions',     
        //     'composer'      => '스콜피언스',
        //     'genre'         => 'classic',
        //     'img'           => 'pions.jpg',
        //     ]);
        // //////////////////// 29 29 발표시연 29 29 29///////////////////
        // DB::table('midis')->insert([
        //     'music_name'    => 'Because Of You',
        //     'path'          => 'Clarkson',     
        //     'composer'      => 'KellyClarkson',
        //     'genre'         => 'pop',
        //     'img'           => 'king.jpg',
        //     ]);
        //////////////////// 30 30 발표시연 30 30 30///////////////////
        DB::table('midis')->insert([
            'music_name'    => 'canon',
            'path'          => 'pachelbels',     
            'composer'      => 'pachelbel',
            'genre'         => 'classic',
            'img'           => 'canon.jpg',
            ]);
        //////////////////// 31 31 최종 31 31 31 31 ///////////////////
        DB::table('midis')->insert([
            'music_name'    => '어쩌다 마주친 그대',
            'path'          => 'PeregrineFalcon',     
            'composer'      => '송골매들',
            'genre'         => 'rock',
            'img'           => 'PeregrineFalcon.jpg',
            ]);
        //////////////////// 32 32 최종 32 32 32 32 ///////////////////
        DB::table('midis')->insert([
            'music_name'    => 'Timeisrunningout',
            'path'          => 'Timeisrunningout',     
            'composer'      => 'Muse',
            'genre'         => 'rock',
            'img'           => 'Timeisrunningout.jpg',
            ]);
    }
}