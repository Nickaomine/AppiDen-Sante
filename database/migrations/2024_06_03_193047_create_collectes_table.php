<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('collectes', function (Blueprint $table) {
            $table->id();
            $table->string('age',50)->nullable();
            $table->string('sexe',50)->nullable();
            $table->string('pays',50)->nullable();
            $table->string('ville',50)->nullable();
            $table->string('symp',50)->nullable();
            $table->string('case1',50)->nullable();
            $table->string('case2',50)->nullable();
            $table->string('case3',50)->nullable();
            $table->string('case4',50)->nullable();
            $table->string('case5',50)->nullable();
            $table->string('case6',50)->nullable();
            $table->string('case7',50)->nullable();
            $table->string('case8',50)->nullable();
            $table->string('case9',50)->nullable();
            $table->string('case10',50)->nullable();
            $table->string('case11',50)->nullable();
            $table->string('case12',50)->nullable();
            $table->string('case13',50)->nullable();
            $table->string('case14',50)->nullable();
            $table->string('case15',50)->nullable();
            $table->string('case16',50)->nullable();
            $table->string('case17',50)->nullable();
            $table->string('case18',50)->nullable();
            $table->string('case19',50)->nullable();
            $table->string('case20',50)->nullable();
            $table->string('case21',50)->nullable();
            $table->string('case22',50)->nullable();
            $table->string('case23',50)->nullable();
            $table->string('case24',50)->nullable();
            $table->string('case25',50)->nullable();
            $table->string('case26',50)->nullable();
            $table->string('case27',50)->nullable();
            $table->string('case28',50)->nullable();
            $table->string('case29',50)->nullable();
            $table->string('case30',50)->nullable();
            $table->string('case31',50)->nullable();
            $table->string('case32',50)->nullable();
            $table->string('case33',50)->nullable();
            $table->string('case34',50)->nullable();
            $table->string('case35',50)->nullable();
            $table->string('case36',50)->nullable();
            $table->string('case37',50)->nullable();
            $table->string('case38',50)->nullable();
            $table->string('case39',50)->nullable();
            $table->string('case40',50)->nullable();
            $table->string('case41',50)->nullable();
            $table->string('case42',50)->nullable();
            $table->string('case43',50)->nullable();
            $table->string('case44',50)->nullable();
            $table->string('case45',50)->nullable();
            $table->string('case46',50)->nullable();
            $table->string('case47',50)->nullable();
            $table->string('case48',50)->nullable();
            $table->string('case49',50)->nullable();
            $table->string('case50',50)->nullable();
            $table->string('intensite1',50)->nullable();
            $table->string('intensite2',50)->nullable();            
            $table->string('intensite3',50)->nullable();
            $table->string('intensite4',50)->nullable();    
            $table->string('intensite5',50)->nullable();
            $table->string('intensite6',50)->nullable();   
            $table->string('intensite7',50)->nullable();   
            $table->string('intensite8',50)->nullable();   
            $table->string('intensite9',50)->nullable();   
            $table->string('intensite10',50)->nullable();   
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('collectes');
    }
};
