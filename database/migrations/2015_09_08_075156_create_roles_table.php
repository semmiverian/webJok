    <?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });
        Schema::create('roles_user', function(Blueprint $table2)
        {
            $table2->integer('roles_id')->unsigned();
            // $table->foreign('roles_id')->references('id')->on('roles')->onDelete('cascade');
            $table2->integer('user_id')->unsigned();
            // $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::drop('roles_user');
        Schema::drop('roles');
    }
}
