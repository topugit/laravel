<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStdTblTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {       
            Schema::create('std_tbl', function (Blueprint $table) {
            $table->integer('std_id');
            $table->string('std_name');
            $table->string('std_roll');
            $table->string('std_father');
            $table->string('std_mother');
            $table->string('std_email');
            $table->string('std_phone');
            $table->string('std_address');
            $table->string('std_image');
            $table->string('std_password');
            $table->string('std_department');
            $table->string('std_admissionyear');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('std_tbl');
    }
}
