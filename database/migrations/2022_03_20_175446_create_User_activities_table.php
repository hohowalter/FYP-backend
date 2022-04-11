<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_activities', function (Blueprint $table) {
            $table->id('user_activity_id');
            $table->longText('fingerprint'); 
            $table->string('startPoint');  
            $table->string('endPoint'); 
            $table->float('from_latitude'); 
            $table->float('from_longtitude');  
            $table->float('to_latitude');  
            $table->float('to_longtitude');   
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_activities');
    }
}
