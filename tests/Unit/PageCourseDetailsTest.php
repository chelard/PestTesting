<?php

use App\Models\Course;
use Illuminate\Foundation\Testing\RefreshDatabase;

use function Pest\Laravel\get;

uses(RefreshDatabase::class);

it('show course details page', function () {
    $course = Course::factory()->create(
        [
            'tagline' => 'This is a tagline',
            'image' => 'image.jpg',
            'learnings' => [
                'Learn laravel routes',
                'Learn laravel controllers',
                'Learn laravel views',
            ],
        ]
    );

    get(route('course-details', $course))
        ->assertOk()
        ->assertSeeText([
            $course->title,
            $course->description,
            'This is a tagline',
            'Learn laravel routes',
            'Learn laravel controllers',
            'Learn laravel views',

        ])->assertSee('image.jpg');

});
