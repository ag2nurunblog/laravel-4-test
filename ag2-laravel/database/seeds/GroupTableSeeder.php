<?php

use Illuminate\Database\Seeder;

use App\Group;

class GroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Group::truncate();

    	Group::create(['name' => 'Presidência']);
    	Group::create(['name' => 'Administrativo']);
    	Group::create(['name' => 'Produção']);
    }
}
