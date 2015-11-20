<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $this->call(UserTableSeeder::class);
        $this->call(UserLessonsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(LessonsTableSeeder::class);
        $this->call(QuestionsTableSeeder::class);
        $this->call(AnswerTableSeeder::class);
        $this->call(LearnedWordTableSeeder::class);
        $this->call(FollowersTableSeeder::class);
        $this->call(LessonBaseSeeder::class);
        Model::reguard();
    }
}
