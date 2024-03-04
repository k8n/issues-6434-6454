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
        Schema::create('teams', function (Blueprint $table) {
            $table->bigInteger('id');
            $table->string('name');
            $table->timestamps();
        });

        \App\Models\Team::query()->insert([
            [
                'id'=> 0,
                'name' => 'Not Assigned'
            ],[
                'id'=> 1,
                'name' => 'development'
            ],[
                'id'=> 2,
                'name' => 'design'
            ],[
                'id'=> 4,
                'name' => 'marketing'
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};
