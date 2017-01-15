<?php

use Illuminate\Database\Seeder;

use App\Company;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::truncate();

    	Company::create([
		    'name' => 'AG2 Nurun'
  		]);
    }
}
