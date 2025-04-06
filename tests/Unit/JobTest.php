<?php

use App\Models\Employer;
use App\Models\Job;
use App\Models\Tag;

test('job belongs to an employer', function () {

    $employer = Employer::factory()->create();
    $job =Job::factory()->create(['employer_id' => $employer->id,]);
    expect($job->employer->is($employer))->toBeTrue();
});
test('employer belongs to a user', function () {
    $user = \App\Models\User::factory()->create();
    $employer = Employer::factory()->create(['user_id' => $user->id]);
    expect($employer->user->is($user))->toBeTrue();

});
it("can have tags", function () {
    $job = Job::factory()->create();
    $tag = Tag::factory()->create();
    $job->tags()->attach($tag);
    expect($job->tags)->toHaveCount(1);
    expect($job->tags[0]->is($tag))->toBeTrue();
});
