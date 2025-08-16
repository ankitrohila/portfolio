<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::create([
            'title'        => 'Personal Portfolio Website',
            'description'  => 'A personal portfolio website built with Laravel backend and React frontend.',
            'live_link'    => 'https://example.com',
            'github_link'  => 'https://github.com/ankitrohilla/portfolio',
            'technologies' => 'Laravel, React, MySQL, TailwindCSS',
            'image'        => 'images/portfolio.png',
        ]);

        Project::create([
            'title'        => 'E-Commerce Store',
            'description'  => 'A full-featured e-commerce platform with payment gateway integration.',
            'live_link'    => 'https://example-store.com',
            'github_link'  => 'https://github.com/ankitrohilla/ecommerce',
            'technologies' => 'Laravel, Vue.js, MySQL, Stripe',
            'image'        => 'images/ecommerce.png',
        ]);

        Project::create([
            'title'        => 'Blog Platform',
            'description'  => 'A multi-user blog platform with rich text editing and image upload.',
            'live_link'    => 'https://example-blog.com',
            'github_link'  => 'https://github.com/ankitrohilla/blog',
            'technologies' => 'Laravel, Alpine.js, MySQL',
            'image'        => 'images/blog.png',
        ]);
    }
}
