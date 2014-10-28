<?php

class UsersController extends \BaseController {

    protected $suer;
    public function __construct(User $user){
        $this->user=$user;
    }
	public function index()
	{
        $users = User::all();
        return View::make('users/index')->withUsers($users);
	}

    public function show($username){
        $user = User::whereUsername($username)->first(); //select *from users where username = limit 1;
        return View::make('users/show',['user'=>$user]);
    }

    public function create() {
        return View::make('users.create');
    }

    public function store() {
        $input=Input::all();
        $this->user->fill($input)->isValid();
        if(!$this->user->fill($input)->isValid()){
            return Redirect::back()->withInput()->withErrors($this->user->errors);
        }
        $this->user->create($input);
        return Redirect::route('users.index');

//        if(!User::isValid(Input::all())){
//            return Redirect::back()->withInput()->withErrors(User::$errors);
//        }

//        $validation = Validator::make(Input::all(),User::$rules);
//
//        if($validation->fails()){
//            return Redirect::back()->withInput()->withErrors($validation->messages());
//        }
//        $user = new User;
//        $user->username = Input::get('username');
//        $user->password = Hash::make(Input::get('password'));
//        $user->save();
////        return Redirect::to('/users');
//        return Redirect::route('users.index');
//        return Input::all();
    }
}
