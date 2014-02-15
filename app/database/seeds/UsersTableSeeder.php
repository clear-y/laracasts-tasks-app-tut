<?php

class UsersTableSeeder extends Seeder
{
	public function run()
	{
		User::truncate();
		
		User::create([
			'username' => 'Jake Cleary',
			'email'    => 'account@jakecleary.net',
			'password' => '1234'
		]);

		User::create([
			'username' => 'Charlie Robertson',
			'email'    => 'charlie@example.com',
			'password' => '1234'
		]);

		User::create([
			'username' => 'JohnSmith',
			'email'    => 'john@smith.com',
			'password' => '1234'
		]);
	}
}