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
        // $this->call(UserTableSeeder::class);
        Eloquent::unguard();
    
        $this->call('CommentTableSeeder');
        $this->command->info('Comment table seeded.');
    }
}
