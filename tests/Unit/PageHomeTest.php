<?php

use App\Models\Course;
use Carbon\Carbon;
use function Pest\Laravel\get;

use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('shows courses overview', function () {
    $firstCourse = Course::factory()->released()->create();
    $secondCourse = Course::factory()->released()->create();
    $lastCourse = Course::factory()->released()->create();

    get(route('home'))
        ->assertOk()
        ->assertSeeText([
            $firstCourse->title,
            $firstCourse->description,
            $secondCourse->title,
            $secondCourse->description,
            $lastCourse->title,
            $lastCourse->description,
        ]);


});

it('shows only releases course', function () {
    $releasedCourse = Course::factory()->released()->create();
    $notReleasedCourse = Course::factory()->create();

    get(route('home'))
        ->assertOk()
        ->assertSeeText([$releasedCourse->title])
        ->assertDontSeeText([$notReleasedCourse->title]);

});

it('it shows courses by releases data', function () {
    $releasedCourse = Course::factory()->released(Carbon::yesterday())->create();
    $newestReleasedCourse = Course::factory()->released()->create();

    get(route('home'))
        ->assertOk()
        ->assertSeeTextInOrder([
            $newestReleasedCourse->title,
            $releasedCourse->title,
        ]);

});
