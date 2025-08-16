<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProjectsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('projects')->insert([
            [
                'title' => 'Portfolio Website',
                'description' => 'A personal portfolio built using Laravel and React.',
                'image_url' => 'https://via.placeholder.com/400x300.png?text=Portfolio',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'E-Commerce Store',
                'description' => 'An e-commerce platform with Laravel backend and Vue.js frontend.',
                'image_url' => 'https://via.placeholder.com/400x300.png?text=E-Commerce',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Blog Platform',
                'description' => 'A blog system with authentication and CRUD posts.',
                'image_url' => 'https://via.placeholder.com/400x300.png?text=Blog',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
