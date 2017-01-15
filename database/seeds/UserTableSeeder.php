<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name' => 'Admin',
            'email' => 'admin@ag2nurun.com.br',
            'password' => 'ag2nurun',
            'active' => 1,
            'company_id' => 1
        ]);

        factory(App\User::class, 99)->create();
    }
}
