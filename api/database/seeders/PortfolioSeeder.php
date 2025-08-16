<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Portfolio;

class PortfolioSeeder extends Seeder
{
    public function run(): void
    {
        $portfolios = [
            [
                'title' => 'Web Design Project',
                'description' => 'A responsive website built with HTML, CSS, and JS.',
                'image_url' => 'https://via.placeholder.com/300x200.png?text=Web+Design',
                'category' => 'Web Design',
                'user_id' => 1
            ],
            [
                'title' => 'E-commerce App',
                'description' => 'Online store application using Laravel and Vue.js.',
                'image_url' => 'https://via.placeholder.com/300x200.png?text=E-commerce',
                'category' => 'Web Development',
                'user_id' => 1
            ],
            [
                'title' => 'Portfolio Website',
                'description' => 'Personal portfolio website to showcase projects.',
                'image_url' => 'https://via.placeholder.com/300x200.png?text=Portfolio',
                'category' => 'Web Design',
                'user_id' => 1
            ],
            [
                'title' => 'Blog Platform',
                'description' => 'A full-featured blogging platform built with Laravel.',
                'image_url' => 'https://via.placeholder.com/300x200.png?text=Blog',
                'category' => 'Web Development',
                'user_id' => 1
            ],
            [
                'title' => 'Mobile App UI',
                'description' => 'Mobile app user interface designs for Android & iOS.',
                'image_url' => 'https://via.placeholder.com/300x200.png?text=Mobile+UI',
                'category' => 'UI/UX',
                'user_id' => 1
            ],
            [
                'title' => 'React Dashboard',
                'description' => 'Admin dashboard with charts and analytics built with React.',
                'image_url' => 'https://via.placeholder.com/300x200.png?text=Dashboard',
                'category' => 'React',
                'user_id' => 1
            ],
            [
                'title' => 'Landing Page Design',
                'description' => 'Marketing landing page designed with Figma & HTML/CSS.',
                'image_url' => 'https://via.placeholder.com/300x200.png?text=Landing+Page',
                'category' => 'Web Design',
                'user_id' => 1
            ],
            [
                'title' => 'Portfolio Photography',
                'description' => 'Photography portfolio site with gallery and slideshow.',
                'image_url' => 'https://via.placeholder.com/300x200.png?text=Photography',
                'category' => 'Photography',
                'user_id' => 1
            ],
            [
                'title' => 'Task Manager App',
                'description' => 'A task management app built with Laravel & Vue.',
                'image_url' => 'https://via.placeholder.com/300x200.png?text=Task+Manager',
                'category' => 'Web Development',
                'user_id' => 1
            ],
            [
                'title' => 'Graphic Design Showcase',
                'description' => 'Collection of graphic design projects and illustrations.',
                'image_url' => 'https://via.placeholder.com/300x200.png?text=Graphics',
                'category' => 'Graphic Design',
                'user_id' => 1
            ],
        ];

        foreach ($portfolios as $portfolio) {
            Portfolio::create($portfolio);
        }
    }
}
