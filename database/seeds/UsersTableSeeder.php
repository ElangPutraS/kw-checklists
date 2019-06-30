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
        //
        \App\User::create([
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'password' => app('hash')->make('12345678')
        ]);
        factory(App\User::class, 10)->create();
    }
}
