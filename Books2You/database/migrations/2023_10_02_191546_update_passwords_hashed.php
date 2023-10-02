<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Migrations\Migration;

class UpdatePasswordsHashed extends Migration
{
    public function up()
    {
        $users = DB::table('users')->get();

        foreach ($users as $user) {
            $hashedPassword = Hash::make($user->password);

            DB::table('users')
                ->where('id', $user->id)
                ->update(['password' => $hashedPassword]);
        }
    }

    public function down()
    {
        // This is the rollback method, if needed
    }
}
