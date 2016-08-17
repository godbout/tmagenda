<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projects = [
            [
                'category' =>'Competent Communicator', 
                'number' => '1',
                'title' => 'Organize Your Speech',
                'limit' => '4-6',
            ],
            [
                'category' =>'Competent Communicator', 
                'number' => '8',
                'title' => 'Get Comfortable with Visual Aids',
                'limit' => '5-7',
            ],
            [
                'category' =>'Competent Communicator', 
                'number' => '10',
                'title' => 'Inspire Your Audience',
                'limit' => '8-10',
            ],
            [
                'category' =>'Competent Communicator', 
                'number' => '6',
                'title' => 'Vocal Variety',
                'limit' => '5-7',
            ],
            [
                'category' =>'Professional Speaker', 
                'number' => '1',
                'title' => 'The Keynote Address',
                'limit' => '15-20',
            ],
        ];

        foreach ($projects as $project) {
            DB::table('projects')->insert([
                'category' => $project['category'],
                'number' => $project['number'],
                'title' => $project['title'],
                'limit' => $project['limit'],
            ]);
        }
    }
}
