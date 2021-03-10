<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

//php artisan make:migration person_example
// squashin migration: squash potentially hundreds of migrations into a single SQL file
// php artisan shema:dump --prune
// php artisan migrate:refresh
// migrate:install, fresh, reset, rollback


// $table->engine, charset, collation
            
            // $table->foreignId('group_name');

            // $table->json();  jsonb, longText
            // 

        // Schema::rename('company', 'companys');
        // drop, Schema::dropIfExists('table');
        // $table->bigIncrements('id');
        // $table->binary('data')->nullable()->default(12);
        // boolean, dateTime, char, date, double, enum, float
        // unique(), index([]), primary(), primary([col1, col2])
        // $table->foreignId('user_id')->constrained('users');
        // ->onUpdate('cascade')->onDelete('cascade')
        // nullable()

        //===seed test data


        //
class CreatePersonMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("company", function(Blueprint $table){
            $table->id();
            $table->string('company_name');
        });


        Schema::create("person_message", function(Blueprint $table){
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->nullable();
            $table->string('gender')->nullable();
            $table->string('ip_address')->nullable();
            $table->foreignId('company_id')->nullable()->constrained('company');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('person_message');
        Schema::drop('company');
    }
}
