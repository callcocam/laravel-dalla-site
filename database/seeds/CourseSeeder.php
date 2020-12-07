<?php

use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;
use SIGA\User;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $users = User::all('id');
        foreach ($users as  $user) {
            $user_id = $user->id;

            $Subject = factory(\App\Subject::class)->create([
                'user_id' => $user_id
            ]);

            factory(\App\Course::class, rand(0, 7))->create([
                'user_id' => $user_id
            ])->each(function ($Course) use ($Subject, $user_id) {

                $Course->subjects()->sync([$Subject->id]);

                $Course->users()->sync([$user_id]);
            });

        }
    }
}
