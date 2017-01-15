<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;'); //desativar validacoes de chaves estrangeiras        


        $this->call(CompanyTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(GroupTableSeeder::class);
        $this->call(UserGroupTableSeeder::class);


        DB::statement('SET FOREIGN_KEY_CHECKS=1;'); //reativar validacoes de chaves estrangeiras
    }
}
