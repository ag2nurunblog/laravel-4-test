<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$company = DB::table('company')->first();

        User::truncate(); 

        // Presidência
    	User::create([
		    'name' => 'Rodrigo Silveira',
		    'email' => 'rodrigosilveira@gmail.com',
		   	'password' => Hash::make('rodrigo'),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        'active' => 1,
        'company_id' => $company->id
  		]);
    	// Administrativo
    	User::create([
		    'name' => 'Maria Duarte',
		    'email' => 'mariaduarte@gmail.com',
		   	'password' => Hash::make('maria'),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        'active' => 1,
        'company_id' => $company->id
  		]);
  		// Produção
    	User::create([
		    'name' => 'João Silva',
		    'email' => 'joaosilva@gmail.com',
		   	'password' => Hash::make('joao'),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        'active' => 1,
        'company_id' => $company->id
  		]);
    }
}
