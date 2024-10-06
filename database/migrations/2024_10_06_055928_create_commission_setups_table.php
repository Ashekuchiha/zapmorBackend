<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommissionSetupsTable extends Migration
{
    public function up()
    {
        Schema::create('commission_setups', function (Blueprint $table) {
            $table->id();
            $table->decimal('amount', 8, 2); // Amount with precision and scale
            $table->string('service');
            $table->string('type');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('commission_setups');
    }
}
