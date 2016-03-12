<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	$user = new User(array(
            'age' => 24,
			'avatar' => "",
            'email' => 'asdjklnsad@gmail.com',
            'gender'  => 'male',
            'is_admin' => 0,
            'name' => str_random(10),
            'password' => "7c4a8d09ca3762af61e59520943dc26494f8941b",
        ));

        $user->timestamps = true;

        $user->save();
    }
}
