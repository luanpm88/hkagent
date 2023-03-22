<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $user = \App\Models\User::where('email', '=', 'agent@bonnuoclongnhien.com')->first();
        $user->is_admin = true;
        $user->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $user = \App\Models\User::where('email', '=', 'agent@bonnuoclongnhien.com')->first();
        $user->is_admin = false;
        $user->save();
    }
};
