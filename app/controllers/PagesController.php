<?php

class PagesController extends \BaseController
{

    public function index() {
        $lessons = ['My First Lesson', 'My Second Lesson', 'My Thir Lesson'];
        $name='John Doe';
//        return View::make('pages.home', ['lessons' => $lessons]);
        return View::make('pages.home', compact('lessons','name'));
//        return View::make('pages.home')->with('lessons', $lessons);
//        return View::make('pages.home')->withLessons($lessons);
    }
    //    public function about(){
    //        return View::make('pages.about');
    //    }


}
