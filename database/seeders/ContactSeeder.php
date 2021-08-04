<?php

namespace Database\Seeders;

use Botble\Base\Supports\BaseSeeder;
use Botble\Contact\Enums\AdmissionStatusEnum;
use Botble\Contact\Models\Admission;
use Faker\Factory;

class ContactSeeder extends BaseSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Factory::create();

        Admission::truncate();

        for ($i = 0; $i < 10; $i++) {
            Admission::create([
                'name'    => $faker->name,
                'email'   => $faker->safeEmail,
                'phone'   => $faker->phoneNumber,
                'address' => $faker->address,
                'subject' => $faker->text(50),
                'content' => $faker->text(500),
                'status'  => $faker->randomElement([AdmissionStatusEnum::READ, AdmissionStatusEnum::UNREAD]),
            ]);
        }
    }
}
