<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $blogs = [
            [
                'title' => 'Fintech 101: Exploring the Basics of Electronic Payments',
                'author' => 'Harsh C.',
                'image' => 'https://pagedone.io/asset/uploads/1696244553.png',
                'content' => 'Content for the first blog...',
            ],
            [
                'title' => 'From Classroom to Cyberspace: The Growing Influence of EdTech in Fintech',
                'author' => 'John D.',
                'image' => 'https://pagedone.io/asset/uploads/1696244579.png',
                'content' => 'Content for the second blog...',
            ],
            [
                'title' => 'Fintech Solutions for Student Loans: Easing the Burden of Education Debt',
                'author' => 'Alexa H.',
                'image' => 'https://pagedone.io/asset/uploads/1696244619.png',
                'content' => 'Content for the third blog...',
            ],
            // Add more blog data as needed
        ];
        foreach ($blogs as $index => $blogData) {
            Blog::firstOrCreate(
                ['title' => $blogData['title']],
                [
                    'author' => $blogData['author'],
                    'image' => $blogData['image'],
                    'content' => $blogData['content'],
                ]
            );
        }

        // Create additional blogs to make a total of 10
        for ($i = count($blogs); $i < 10; $i++) {
            Blog::firstOrCreate(
                ['title' => "Sample Blog Title $i"],
                [
                    'author' => "Author $i",
                    'image' => "https://via.placeholder.com/150",
                    'content' => "Content for blog $i...",
                ]
            );
        }
    }
}
