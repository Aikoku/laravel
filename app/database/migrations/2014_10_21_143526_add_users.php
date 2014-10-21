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
            'password'=>'Password',
            'name'=>'Mark',
            'lastname'=>'Nikolajev'
        ));
        DB::table('users')->insert(array(
            'username'=>'Login 2',
            'password'=>'Password 2',
            'name'=>'Mark 2',
            'lastname'=>'Nikolajev 2'
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
        DB::table('users')->where('name','=','Mark 2')->delete();
	}

}
