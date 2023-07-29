<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTeacherSalaryTeacherTbl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::table('teacher_tbl', function (Blueprint $table) {
            $table->string('teacher_salary')->after('teacher_dept');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::table('teacher_tbl', function (Blueprint $table) {
            $table->dropColumn('teacher_salary');            
        });
    }
}
