<?php
//use DB;
class SongController extends \BaseController {

    public function index(){
        $songs = $this->getSongs();
//        DB::table('songs')->insert(['title'=>'Fall','created_at'=>new DateTime,'updated_at'=>new DateTime]);
//        DB::table('songs')->insert(['title'=>'Boyfriend','created_at'=>new DateTime,'updated_at'=>new DateTime]);
//        DB::table('songs')->insert(['title'=>'Be Alright','created_at'=>new DateTime,'updated_at'=>new DateTime]);
//        DB::table('songs')->get();
        return View::make('songs.index',compact('songs'));
    }

    public function show($id){
        $song = $this->getSongs()[$id];
        return View::make('songs.show',compact('song'));
    }

    /**
     * @return array
     */
    public function getSongs() {
        return ['Boyfriend', 'Be alright', 'Fall'];

    }


}
