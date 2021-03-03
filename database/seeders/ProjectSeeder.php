<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Project::create([
            'title' => 'المشروع الاول',
            'desc' => 'وصف المشروع الاول',
            'user_id' => '1',
            'status' => '0',

        ]);

        Project::create([
            'title' => 'المشروع الثاني',
            'desc' => 'وصف المشروع الثاني',
            'user_id' => '1',
            'status' => '1',

        ]);

          Project::create([
            'title' => 'المشروع الثالث',
            'desc' => 'وصف المشروع الثالث',
            'user_id' => '1',
            'status' => '1',
        ]);

         Project::create([
            'title' => 'المشروع الرابع',
            'desc' => 'وصف المشروع الرابع',
            'user_id' => '1',
            'status' => '2',
        ]);

        
    }
}
