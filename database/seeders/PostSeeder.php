<?php

namespace Database\Seeders;

use Database\Factories\CommentFactory;
use Database\Factories\Helpers\FactoryHelper;
use Database\Seeders\Traits\DisableForeignKeys;
use Database\Seeders\Traits\TruncateTable;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    use TruncateTable, DisableForeignKeys;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->disableForeignKey();
        $this->truncate("posts");
        $posts = \App\Models\Post::factory(3)
            //->has(Comment::factory(3), "comments")
            ->setUntitled()
            ->create();
        $posts->each(function($post){
            $post->users()->sync([FactoryHelper::getRandomModelId(\App\Models\User::class)]);
        });
        $this->enableForeignKey();
    }
}
