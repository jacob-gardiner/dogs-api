<?php

namespace Database\Factories;

use App\Models\Dog;
use Illuminate\Database\Eloquent\Factories\Factory;

class DogFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Dog::class;

    private $breeds = [
        "Affenpinscher",
        "Alaskan Malamute",
        "Australian Terrier",
        "Beagle",
        "Bernese Mountain Dog",
        "Border Collie",
        "Bulldog",
        "Dachshund",
        "English Mastiff",
        "German Shepherd",
        "Golden Retriever",
        "Great Dane",
        "Labrador Retriever",
        "Newfoundland",
        "Poodle",
        "Siberian Husky",
    ];

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'breed' => $this->faker->randomElement($this->breeds),
            'age' => $this->faker->numberBetween(0, 18),
        ];
    }
}
