<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Company;
use App\Group;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        foreach(range(1, 50) as $index)
        {
            Company::create([
                'name' => $faker->word . $index
            ]);
        }

        foreach(range(1, 50) as $index)
        {
            Group::create([
                'name' => $faker->word . $index
            ]);
        }

        foreach(range(1, 50) as $index)
        {
            $user = new User();
            $user->name       = $faker->word . $index;
            $user->email      = $faker->email;
            $user->password   = bcrypt($faker->password);
            $user->company_id = rand(1,50);

            $user->save();
            $user->groups()->detach();

            $groupsHandle = [];
            foreach (range(1, 5) as $number) {
                $groupsHandle[] = rand(1,50);
            }
            $user->groups()->sync($groupsHandle, true);
        }
    }
}
