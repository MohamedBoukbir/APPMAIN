<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
                  //////////////////
            $table->string('firstName')->nullable();
            $table->string('lastName')->nullable();
            $table->string('address')->nullable();
            $table->string('country')->nullable();
            $table->string('phone')->nullable();
            $table->string('religion')->nullable();
            $table->boolean('status')->default(0);
            $table->string('domain')->nullable();
            ///////famille////
            $table->string('child')->nullable();
            $table->string('social_status')->nullable();
            ///////candidat////
            $table->string('years_experience')->nullable();
            /////////////////////////////////
            $table->string('child_baby')->nullable();
            $table->string('child_kid')->nullable();
            $table->string('child_boy')->nullable();
            $table->string('type_of_employment')->nullable();
            //////////////////////////////////
            $table->rememberToken();
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
        Schema::dropIfExists('users');
     
    }  
};
