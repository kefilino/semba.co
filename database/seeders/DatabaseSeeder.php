<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@root',
            'password' => Hash::make('admin'),
            'kk' => '-',
            'nik' => '-',
            'address' => '-',
            'zipcode' => '-',
            'is_admin' => true,
        ]);
        DB::table('bantuan')->insert([
            'nama_bantuan' => 'Sembako',
            'keterangan' => 'Sembilan Bahan Pokok',
            'persediaan' => 10,
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
