<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id'       => str_random(36),
            'name'     => 'admin',
            'email'    => 'admin@admin.com',
            'password' => bcrypt('123456'),
        ]);
    }
}
