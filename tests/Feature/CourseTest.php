<?php

use App\Models\Course;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('only return released courses for released scope', function () {
    $releasedCourse = Course::factory()->released()->create();
    $notReleasedCourse = Course::factory()->create();

    $courses = Course::released()->get();

    expect($courses)->toHaveCount(1)
        ->and($courses->first()->title)->toEqual($releasedCourse->title);
});
