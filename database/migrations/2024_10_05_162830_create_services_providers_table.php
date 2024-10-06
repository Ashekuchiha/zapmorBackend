<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services_providers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phnnumber');
            $table->string('profileImage'); // Store file path as string
            $table->string('password');
            $table->json('location'); // Store location as JSON
            $table->integer('experience');
            $table->string('specialization');
            $table->string('status');
            $table->string('service');
            $table->string('certificate'); // Store file path as string
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
        Schema::dropIfExists('services_providers');
    }
}
