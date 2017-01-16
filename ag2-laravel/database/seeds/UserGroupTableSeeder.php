<?php

use Illuminate\Database\Seeder;

use App\UserGroup;

class UserGroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$presidencia = 1;
    	$administrativo = 2;
    	$producao = 3;

      UserGroup::truncate();

        //Rodrigo Silveira
    	UserGroup::create([
		    'user_id' => '1',
            'group_id' => $presidencia
  		]);
  		//Maria Duarte
  		UserGroup::create([
		    'user_id' => '2',
            'group_id' => $administrativo
  		]);
  		//João Silva
  		UserGroup::create([
		    'user_id' => '3',
            'group_id' => $producao
  		]);
    }
}
