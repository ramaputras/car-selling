<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\State;
use Illuminate\Database\Eloquent\Factories\Sequence;
use App\Models\City;
use App\Models\Maker;
use App\Models\Model;
use App\Models\CarType;
use App\Models\Car;
use App\Models\CarImage;
use App\Models\FuelType;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        CarType::factory()->sequence(
            ["name" => "Sedan"],
            ["name" => "Hatchback"],
            ["name" => "SUV"],
            ["name" => "Pickup Truck"],
            ["name" => "Minivan"],
            ["name" => "Jeep"],
            ["name" => "Coupe"],
            ["name" => "Crossover"],
            ["name" => "Sports Car"],
        )
        ->count(9)
        ->create();

        FuelType::factory()->sequence(
            ["name" => "Gasoline"],
            ["name" => "Diesel"],
            ["name" => "Electronic"],
            ["name" => "Hybrid"],
        )
        ->count(4)
        ->create();

        $states = [
            "California" => ["Los Angeles", "San Francisco", "San Diego", "Sacramento"],
            "New York" => ["New York City", "Buffalo", "Rochester", "Albany"],
            "Texas" => ["Houston", "San Antonio", "Dallas", "Austin"],
            "Florida" => ["Miami", "Orlando", "Tampa", "Jacksonville"],
            "Illinois" => ["Chicago", "Springfield", "Rockford", "Peoria"],
            "Pennsylvania" => ["Philadelphia", "Pittsburgh", "Allentown", "Erie"],
            "Ohio" => ["Columbus", "Cleveland", "Cincinnati", "Toledo"],
            "Michigan" => ["Detroit", "Grand Rapids", "Warren", "Ann Arbor"],
            "Georgia" => ["Atlanta", "Augusta", "Columbus", "Savannah"],
            "Washington" => ["Seattle", "Spokane", "Tacoma", "Vancouver"],
        ];

        foreach ($states as $state => $cities) {
            State::factory()
            ->state(['name' => $state])
            ->has(
                City::factory()
                ->count(count($cities))
                ->sequence(...array_map(fn($city) => ['name' => $city], $cities))
            )->create();
        }

        $makers = [
            "Toyota" => ["Camry", "Corolla", "RAV4", "Highlander", "Tacoma"],
            "Ford" => ["F-150", "Mustang", "Explorer", "Escape", "Bronco"],
            "Honda" => ["Accord", "Civic", "CR-V", "Pilot", "Odyssey"],
            "Chevrolet" => ["Silverado", "Equinox", "Malibu", "Tahoe", "Corvette"],
            "Nissan" => ["Altima", "Titan", "Rogue", "Sentra", "Pathfinder"],
            "BMW" => ["3 Series", "5 Series", "X3", "X5", "7 Series"],
            "Mercedes-Benz" => ["C-Class", "E-Class", "GLC", "GLE", "S-Class"],
            "Volkswagen" => ["Jetta", "Tiguan", "Atlas", "Passat", "Golf"],
            "Hyundai" => ["Elantra", "Sonata", "Tucson", "Santa Fe", "Palisade"],
            "Kia" => ["Sorento", "Telluride", "Sportage", "K5", "Forte"],
        ];

        foreach($makers as $maker => $models){
            Maker::factory()
            ->state(["name" => $maker])
            ->has(
                Model::factory()
                ->count(count($models))
                ->sequence(...array_map(fn($model)=> ["name" => $model], $models))
                )
            ->create();
        }

        User::factory()
        ->count(3)
        ->create();

        User::factory()
        ->count(2)
        ->has(Car::factory()
            ->count(50)
            ->has(CarImage::factory()
            ->count(5)
            ->sequence(fn(Sequence $sequence) => ['position' => $sequence->index % 5 + 1])
            // ->sequence(
            //     ['position' => 1],                
            //     ['position' => 2],
            //     ['position' => 3],
            //     ['position' => 4],
            //     ['position' => 5],                
            // )
            , 'images')
            ->hasFeatures(),
             'favouriteCars')
        ->create();

    }
}
