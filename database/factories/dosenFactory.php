<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\dosen;
use Illuminate\Database\Eloquent\Factories\Factory;

class dosenFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = dosen::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'matkul_id'=> $this-> faker-> randomElement(['1','2','3','4','5']),
            'nip'=> $this-> faker->numberBetween(100001, 100100),
            'nama'=> $this-> faker->name,
            'slug'=> Str::slug($this->faker->sentence()),
            'alamat'=> $this-> faker->address,
        ];
    }
}
