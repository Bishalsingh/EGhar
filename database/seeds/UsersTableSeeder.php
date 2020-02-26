<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use TCG\Voyager\Models\Role;
use TCG\Voyager\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (User::count() == 0) {
            $role = Role::where('name', 'admin')->firstOrFail();

            User::create([
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => bcrypt('password'),
                'remember_token' => Str::random(60),
                'role_id'        => $role->id,
                'phone' => '9860684980',
                'address' => 'Lalitpur',
                'profile_pic' => 'https://image.winudf.com/v2/image1/Y29tLmlub3RhZnN0dWRpby5jb21wYW55cHJvZmlsZV9pY29uXzE1NTU2MzU1NDJfMDYy/icon.png?w=170&fakeurl=1',

            ]);
        }
    }
}
