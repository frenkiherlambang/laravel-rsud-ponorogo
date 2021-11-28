<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class DokterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name(),
            'tgl_lahir' => $this->faker->date(),
            'spesialisasi' => $this->faker->randomElement(['penyakit dalam', 'gigi dan mulut', 'jantung', 'THT', 'kulit dan kelamin']),
            'alamat' => $this->faker->address(),
            'mulai_jam_praktek' => Carbon::now()->subHours(rand(1,2))->toTimeString(),
            'akhir_jam_praktek' => Carbon::now()->addHours(rand(1,2))->toTimeString(),
            'is_active' => $this->faker->boolean()
        ];
    }
}
