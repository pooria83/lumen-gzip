<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Course;
use App\Models\Episode;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $user = User::factory()
        ->create();

         Course::factory()
        ->count(500)
        ->state(['user_id' => $user->id])
        ->create()->each(function ($course){
            Episode::factory()
            ->count(30)
            ->make()
            ->each(function ($episode , $key) use ($course){
                $episode->number = $key + 1;
                $course->episodes()->save($episode);
            });
        });







    }
}
