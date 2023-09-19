<?php

use App\Models\Course;
use function Pest\Laravel\get;

use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('shows courses overview', function () {
    Course::factory()->create(['title' => 'Course A', 'description'=> 'Description of the course A']);
    Course::factory()->create(['title' => 'Course B', 'description'=> 'Description of the course B']);
    Course::factory()->create(['title' => 'Course C', 'description'=> 'Description of the course C']);

    get(route('home'))
        ->assertOk()
        ->assertSeeText([
            'Course A',
            'Description of the course A',
            'Course B',
            'Description of the course B',
            'Course C',
            'Description of the course C',
        ]);


});

//it('shows only releases course', function () {
//
//});
//
//it('it shows courses by releases data', function () {
//
//});
