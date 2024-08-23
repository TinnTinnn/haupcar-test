<?php

namespace Database\Seeders;

use App\Http\Controllers\CarController;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    public function run(): void
    {
        $car = new CarController();

        $defaultCar = [
            [
                'brand' => 'Toyota',
                'model' => 'Camry',
                'year' => 2023,
                'vin' => 'JT2BG28K8V0037010',
                'engine_number' => '4T1BF1FK5HU123456',
                'license_plate' => 'กท489',
                'color' => 'White',
                'mileage' => 15000
            ],
            [
                'brand' => 'BMW',
                'model' => 'X5',
                'year' => 2022,
                'vin' => '5UXKR2C51K0L12345',
                'engine_number' => '5U3X1A2B4K9L567890',
                'license_plate' => 'รวย555',
                'color' => 'Black',
                'mileage' => 12000
            ],
            [
                'brand' => 'Honda',
                'model' => 'Civic',
                'year' => 2024,
                'vin' => 'JT2BG28K8V0037010',
                'engine_number' => '4T1BF1FK5HU123456',
                'license_plate' => 'บท787',
                'color' => 'Red',
                'mileage' => 3000
            ],
            [
                'brand' => 'Tesla',
                'model' => 'Model S',
                'year' => 2024,
                'vin' => '5YJSA1E45MF123456',
                'engine_number' => 'TESLA123456',
                'license_plate' => '',
                'color' => 'Black',
                'mileage' => 0
            ],
            [
                'brand' => 'BYD',
                'model' => 'Atto 3',
                'year' => 2024,
                'vin' => 'L4YB0F4Y7F123456',
                'engine_number' => 'BYD123456',
                'license_plate' => 'พบ946ง',
                'color' => 'Blue',
                'mileage' => 5000
            ],
            [
                'brand' => 'Nissan',
                'model' => 'Almera',
                'year' => 2012,
                'vin' => '1N4AL3AP0JC123456',
                'engine_number' => 'NISSAN123456',
                'license_plate' => 'กท2451',
                'color' => 'Black',
                'mileage' => 12000
            ],
            [
                'brand' => 'Neta',
                'model' => 'Neta V',
                'year' => 2024,
                'vin' => 'L4NETA0V7F123456',
                'engine_number' => 'NETA123456',
                'license_plate' => '',
                'color' => 'Green',
                'mileage' => 0
            ],
            [
                'brand' => 'GWM',
                'model' => 'H6',
                'year' => 2024,
                'vin' => 'L4GWMD0H6F123456',
                'engine_number' => 'GWM123456',
                'license_plate' => '',
                'color' => 'Orange',
                'mileage' => 0
            ],
        ];

        foreach ($defaultCar as $carData) {
            $car->create($carData);
        }
    }
}
