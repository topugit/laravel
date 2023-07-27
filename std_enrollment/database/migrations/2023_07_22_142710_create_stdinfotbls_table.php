<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStdinfotblsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stdinfotbls', function (Blueprint $table) {
            $table->id();
            $table->string('std_roll');
            $table->string('std_address');
            $table->string('std_area');
            $table->string('std_college');
            $table->integer('std_phone');
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
        Schema::dropIfExists('stdinfotbls');
    }
}
