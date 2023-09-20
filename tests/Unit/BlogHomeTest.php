<?php

use App\Models\Blog;

uses(\Illuminate\Foundation\Testing\RefreshDatabase::class);

it('it shows the blog information', function () {

    Blog::factory()->create(['title' => 'Blog 1', 'body' => 'Blog 1 Body']);
    Blog::factory()->create(['title' => 'Blog 2', 'body' => 'Blog 2 Body']);
    Blog::factory()->create(['title' => 'Blog 3', 'body' => 'Blog 3 Body']);

    $this->get(route('blog'))
        ->assertStatus(200)
        ->assertSeeText([
            'Blog 1',
            'Blog 1 Body',
            'Blog 2',
            'Blog 2 Body',
            'Blog 3',
            'Blog 3 Body',
        ]);
});
