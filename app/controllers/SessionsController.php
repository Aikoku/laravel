<?php

class SessionsController extends BaseController{

    public function create() {
//        if(Auth::check()) return Redirect::to('login');

        return View::make('sessions.create');
    }

    public function show($username){
        $user = User::whereUsername($username)->first(); //select *from users where username = limit 1;
        return View::make('users/show',['user'=>$user]);
    }

    public function store() {
        if(Auth::attempt(Input::only('username','password'))){
            return '<a href="logout">logout</a><br>Wellcome ' .Auth::user()->name .'
            <br> LastName : '.Auth::user()->lastname .'';
//            return Auth::user();
        }
        return Redirect::back()->withInput();
    }

    public function destroy() {
        Auth::logout();
        return View::make('sessions.create');
//        return 'Logout OK!';
//        return Redirect::route('sessions/store');
    }
}