<?php

use App\Models\Employer;
use App\Models\job;

test('it belongs to an employer', function () {
    // expect(true)->toBeFalse();

    // AAA Test method -> Arrange, Act, Assert

    // Arrange
    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
        'employer_id' => $employer->id,
    ]);

    // Act-Assert
    expect($job->employer->is($employer))->toBeTrue();

});

test('it can have  tags', function () {
    // AAA
    $job = Job::factory()->create();

    $job->tag('Frontend');

    expect($job->tags)->toHaveCount(1);
});
