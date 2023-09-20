<?php

use App\Models\Course;

use function Pest\Laravel\get;

it('give back successful response for home page', function () {
    get(route('home'))
        ->assertOk();

});

it('give  back successful response for course details page', closure: function () {
    $course = Course::factory()->create();
    get(route('course-details', $course))
        ->assertOk();
});
