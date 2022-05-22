<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutoRefsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auto_refs', function (Blueprint $table) {
            $table->id();
            $table->decimal('right_sph')->nullable();
            $table->decimal('right_cyl')->nullable();
            $table->decimal('right_ax')->nullable();
            $table->decimal('left_sph')->nullable();
            $table->decimal('left_cyl')->nullable();
            $table->decimal('left_ax')->nullable();
            $table->integer('user_id');
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
        Schema::dropIfExists('auto_refs');
    }
}
