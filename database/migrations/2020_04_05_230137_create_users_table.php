<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateUsersTable.
 */
class CreateUsersTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table) {
			$table->increments('id');
			//Dados Pessoais
            $table->char('cpf',11)->unique()->nullable();
            $table->string('name',50);
            $table->char('phone',11);
            $table->date('birth')->nullable();
            $table->char('gender',1)->nullable();
			$table->text('notes')->nullable();
			//Autenticação
            $table->string('email',80)->unique();
			$table->string('password',254)->nullable();
			
			 //Permissão
            $table->string('status',80)->default('active');
            $table->string('permission',80)->default('app.user');

            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users',function(Blueprint $table){
			
		});
		Schema::drop('users');
	}
}
