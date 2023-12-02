<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'created_at'=>now(),
            'updated_at'=>now(),
            'nama'=>'superadminn',
            'mail'=>'admin@gmail.com',
            'role'=>'superadmin',
            'telp'=>'082232339741',
            'password'=>bcrypt('superadmin1')
        ]);
    }
}
