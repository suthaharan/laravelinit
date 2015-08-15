<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsToUsers extends Migration {

    /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::table('users',function(Blueprint $table){         
            $table->integer('status')->after('password');
    });
    
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    //
  }

}