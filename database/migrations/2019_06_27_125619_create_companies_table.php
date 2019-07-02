<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('companies')){
            Schema::create('companies', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->unsignedBigInteger('user_id');
                $table->string('company_name', 100);
                $table->string('contact_person_name', 100);
                $table->longText('address');
                $table->string('phone', 50);
                $table->string('email', 50);
                $table->string('own_website', 255);
                $table->longText('working_hours');
                $table->string('logo');
                $table->longText('company_description');
                $table->timestamps();
                $table->foreign('user_id')->references('id')->on('users');
            });
        }

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
