<?php

use App\Models\Dog;
use Illuminate\Foundation\Testing\RefreshDatabase;

$dogCount = 50;

uses(RefreshDatabase::class);

beforeEach(function () use ($dogCount) {
    Dog::factory()->count($dogCount)->create();
});


it('likes dags', function () {
    $response = $this->get(route('dogs.index'));

    $response->assertStatus(200);
});

it('returns all dogs go to heaven in a descending order', function () use  ($dogCount) {

    $firstDog = Dog::orderByDesc('id')->firstOrFail();
    $response = $this->getJson(route('dogs.index'));

    expect($response->json())->toHaveCount($dogCount);
    expect($response->getOriginalContent()[0]->id)->toBe($firstDog->id);
});
