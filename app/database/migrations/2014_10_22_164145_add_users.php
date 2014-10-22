<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUsers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        DB::table('users')->insert(array(
            'username'=>'Login',
            'password'=>Hash::make('Password'),
            'name'=>'Mark',
            'lastname'=>'Nikolajev'
        ));
        DB::table('users')->insert(array(
            'username'=>'Login2',
            'password'=>Hash::make('Password2'),
            'name'=>'Angel',
            'lastname'=>'Benjamin'
        ));
        DB::table('users')->insert(array(
            'username'=>'Login3',
            'password'=>Hash::make('Password3'),
            'name'=>'Johan',
            'lastname'=>'Tuga'
        ));
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        DB::table('users')->where('name','=','Mark')->delete();
        DB::table('users')->where('name','=','Angel')->delete();
        DB::table('users')->where('name','=','Johan')->delete();
	}

}
