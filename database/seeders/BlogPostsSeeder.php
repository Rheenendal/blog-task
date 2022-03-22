<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogPostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blog_posts')->insert([
            [
                'title' => 'How to bake a cake',
                'body' => '<p>Blog body</p>',
                'published_at' => Carbon::parse('2020-02-01'),
                'created_at' => now(),
            ],
            [
                'title' => 'How to bake cookies',
                'body' => '<p>Blog body</p>',
                'published_at' => Carbon::parse('2020-02-14'),
                'created_at' => now(),
            ],
            [
                'title' => 'How to bake bread',
                'body' => '<p>Blog body</p>',
                'published_at' => Carbon::parse('2020-02-25'),
                'created_at' => now(),
            ],
            [
                'title' => 'How to make custard',
                'body' => '<p>Blog body</p>',
                'published_at' => Carbon::parse('2020-03-10'),
                'created_at' => now(),
            ],
            [
                'title' => 'The joys of raisins',
                'body' => '<p>Blog body</p>',
                'published_at' => Carbon::parse('2020-03-16'),
                'created_at' => now(),
            ],
            [
                'title' => 'Making pizza dough',
                'body' => '<p>Blog body</p>',
                'published_at' => Carbon::parse('2020-03-28'),
                'created_at' => now(),
            ],
            [
                'title' => 'To kneed, or not to kneed, that is the question',
                'body' => '<p>Blog body</p>',
                'published_at' => Carbon::parse('2020-04-04'),
                'created_at' => now(),
            ],
            [
                'title' => 'Is Bake Off better on Channel 4?',
                'body' => '<p>Blog body</p>',
                'published_at' => Carbon::parse('2020-04-21'),
                'created_at' => now(),
            ],
            [
                'title' => 'The perfect Victoria Sponge',
                'body' => 'tes',
                'published_at' => Carbon::parse('2020-03-01'),
                'created_at' => now(),
            ],
            [
                'title' => 'How to make a croissant',
                'body' => 'test',
                'published_at' => Carbon::parse('2020-02-01'),
                'created_at' => now(),
            ],
        ]);
    }
}
