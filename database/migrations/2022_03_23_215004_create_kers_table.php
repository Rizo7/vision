<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kers', function (Blueprint $table) {
            $table->id();
            $table->decimal('Right_R1_MM');
            $table->decimal('Right_R1_D');
            $table->decimal('Right_R1_AX');
            $table->decimal('Right_R2_MM');
            $table->decimal('Right_R2_D');
            $table->decimal('Right_R2_AX');
            $table->decimal('Left_R1_MM');
            $table->decimal('Left_R1_D');
            $table->decimal('Left_R1_AX');
            $table->decimal('Left_R2_MM');
            $table->decimal('Left_R2_D');
            $table->decimal('Left_R2_AX');
            $table->integer('patient_id');
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
        Schema::dropIfExists('kers');
    }
}
