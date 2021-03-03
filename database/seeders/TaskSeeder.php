<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $project_id = [1,2,3,4];
        foreach($project_id as $row){
            Task::create([
                'body' => 'وصف المهمة الاولى',
                'done' => '0',
                'project_id' => $row, 
            ]);
            Task::create([
                'body' => 'وصف المهمة الثانية',
                'done' => '1',
                'project_id' => $row, 
            ]);
        };
    }
}
