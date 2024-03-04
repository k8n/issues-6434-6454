<?php

use App\Models\TeamUser;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('team_user', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\User::class);
            $table->foreignIdFor(\App\Models\Team::class);
            $table->timestamps();
        });

        TeamUser::query()->insert([
            [
                'user_id' => 1,
                'team_id' => 0
            ], [
                'user_id' => 2,
                'team_id' => 0
            ], [
                'user_id' => 3,
                'team_id' => 1
            ], [
                'user_id' => 4,
                'team_id' => 2
            ], [
                'user_id' => 5,
                'team_id' => 3
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('userTeam');
    }
};
