<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::get('users',function(){
    $users = User::all();
    return View::make('users/index')->withUsers($users);
});
Route::get("users/{username}",function($username){
    $user = User::whereUsername($username)->first(); //select *from users where username = limit 1;
    return View::make('users/show',['user'=>$user]);
//    return View::make('users/show/')->withUser($user); // --ERROR
});

//Route::get('/', function()
//{
//	return View::make('Hello');
//});

//Route::get('/',function(){
//    $user = DB::table('users')->get();
//    $user = DB::table('users')->where('username','!=','mark')->get();
//    DB::select('select * from users');
//    DB::insert('insert * from users');
//    $users=User::where('username','!=','mark')->get();

//    $users=User::all();
//    $users=User::find(1);
//    return $users;

//Create new users
//    $user = new User;
//    $user->username = 'New User';
//    $user->password = Hash::make('Pass');
//    $user->save();

//    User::create([
//        'username' => 'oneMoreUser',
//        'password'=> Hash::make('password')
//    ]);

//    Updating old users
//    $user=User::find(3);

    //Deleting User
//    $user = User::find(2);
//    $user->delete();

    //Sort users
//    return User::orderBy('username','asc')->get();
    //Take first two in order

//    return User::orderBy('username','asc')->take(2)->get();
//return User::all();
//    $users = DB::table('users')->get();
//    return $users;
//    return User::all();

//    dd($user); // die(var_dump($user));
//    return $users;
//});

//Route::get('/','PagesController@index');
//Route::get('about','PagesController@about');
//
//Route::get('songs','SongController@index');
//Route::get('songs/{id}','SongController@show');

//$router->get('songs','SongController@index');
//get('songs','SongController@index');
