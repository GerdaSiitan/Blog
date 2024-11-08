<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserSeeder::class);
        $this->call(PostSeeder::class);
        $this->call(CommentSeeder::class);
        $this->call(TagSeeder::class);
<<<<<<< HEAD
        $this->call(LikeSeeder::class);
        $this->call(FollowsSeeder::class);
=======
>>>>>>> 785228b813ef7b7d3ff89b064ec61810c576a0f2
    }
}
