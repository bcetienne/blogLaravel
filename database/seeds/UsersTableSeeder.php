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
        static $password;
        $faker = Faker\Factory::create();
        Schema::disableForeignKeyConstraints();
        $this->command->info('Disabled Foreign Keys');
        DB::table('users')->truncate();
        $this->command->info('Truncate table');
        Schema::enableForeignKeyConstraints();
        $this->command->info('Enable Foreign Keys');

            DB::table('users')->insert([
                //'name' => $faker->name(),
                'firstname' => 'admin',
                'lastname' => 'admin',
                'bio' => 'Bio',
                'email' => 'admin@mail.com',
                'password' => bcrypt(0000),
                'status' => 1,
                'remember_token' => str_random(10),
            ]);
            $this->command->info('User admin created with password 0000');

    }
}
