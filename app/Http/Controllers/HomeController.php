<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\CarFeatures;
use App\Models\CarImage;
use App\Models\CarType;
use App\Models\Maker;
use App\Models\CarModel;
use App\Models\User;
use App\Models\FuelType;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    //
    public function index(){
        // Select all cars
        // $cars = Car::get();

        // // Select published cars
        // $cars = Car::where('year', '>', 2)->get();

        // // Select the first car
        // $cars = Car::first();

        // // Selecting car in descending order
        // $cars = Car::orderBy('year', 'desc')->get();

        // dump($cars);


        // $car = new Car();

        // $car->id = 5;
        // $car->maker_id = 1;
        // $car->model_id = 1;
        // $car->year = 1900;
        // $car->price = 123;
        // $car->vin = 123;
        // $car->mileage = 123;
        // $car->car_type_id = 1;
        // $car->fuel_type_id = 1;
        // $car->user_id = 1;
        // $car->city_id = 1;
        // $car->address = "Lorem ipsum";
        // $car->phone = "123";
        // $car->description = null;
        // $car->published_at = now();
        // $car->save();

        // $carData = [
        //     "maker_id" => 1,
        //     "model_id" => 1,
        //     "year" => 1900,
        //     "price" => 123,
        //     "vin" => 123,
        //     "mileage" => 123,
        //     "car_type_id" => 1,
        //     "fuel_type_id" => 1,
        //     "user_id" => 1,
        //     "city_id" => 1,
        //     "address" => "Lorem ipsum",
        //     "phone" => "123",
        //     "description" => null,
        //     "published_at" => now(),
        // ];

        // // Approach 1
        // $car = Car::create($carData);

        // // Approach 2
        // $car2 = new Car();
        // $car2->fill($carData);
        // $car2->save();

        // // Approach 3
        // $car3 = new Car($carData);
        // $car3->save();

        // $car = Car::find(1);
        // $car->price = 1000;
        // $car->save();

        // $carData = [
        //     "maker_id" => 1,
        //     "model_id" => 1,
        //     "year" => 1900,
        //     "price" => 123,
        //     "vin" => 9999,
        //     "mileage" => 123,
        //     "car_type_id" => 1,
        //     "fuel_type_id" => 1,
        //     "user_id" => 1,
        //     "city_id" => 1,
        //     "address" => "Lorem ipsum",
        //     "phone" => "123",
        //     "description" => null,
        //     "published_at" => now(),
        // ];


        // // Updating an attribute of data or create new one if it does not exist
        // $car = Car::updateOrCreate(['vin' => 123456789, 'price' => 123], 
        // $carData);

        // dump($car);

        // Updating multiple record
        // Car::where('published_at', null)
        // ->where('user_id', 1)
        // ->update(['published_at' => now()]);

        // Deleting record
        // $car = Car::find(1);
        // $car->delete();

        // Car::destroy([2, 3]);

        // Car::where('published_at', '')
        // ->where('user_id', 1)
        // ->delete();

        // Truncating: Means deleting records for real
        // Car::truncate();


        // Retrieve all car records where the price is greater than $20,000
        // Car::where('price', '>', 20000)->get();

        // Fetch the maker details where the maker name is Toyota
        // $maker = Maker::where('name', 'Toyota')->get();

        // Insert a new FuelType with the name 'Solar'
        // FuelType::create(['name'=>'solar']);

        // Update the price of the car with id 1 to $15.000
        // Car::find(1)->update(['price' => 15000]);

        // Delete all car records where the year is before 2020
        // Car::where('year', '<', 2020)->delete();

        // $car = Car::find(1);

        
        // $car->features->abs = 0;
        // $car->features->save();
        
        // $car->features->update(['abs' => 0]);
        
        // dump($car->features, $car->primaryImage);


        // $carFeatures = new CarFeatures([
        //     "abs" => 0,
        //     "air_conditioning" => 0,
        //     "power_windows" => 0,
        //     "power_door_locks" => 0,
        //     "cruise_control" => 0,
        //     "bluetooth_connectivity" => 0,
        //     "remote_start" => 0,
        //     "gps_navigation" => 0,
        //     "heated_seats" => 0,
        //     "climate_control" => 0,
        //     "rear_parking_sensors" => 0,
        //     "leather_seats" => 0,
        // ]);

        // $car = Car::find(2);

        // $car->features()->save($carFeatures);

        
        // dump($car->images);

        // $car = Car::find(1);

        // $image = new CarImage(['image_path' => 'something', 'position' => 2]);

        // $car->images()->create(['image_path' => 'something 2', 'position' => 3]);

        // $car->images()->saveMany([
        //     new CarImage(['image_path' => 'something 2', 'position' => 4]),
        //     new CarImage(['image_path' => 'something 2', 'position' => 5])
        // ]);

        // $car->images()->createMany([
        //     ['image_path' => 'something', 'position' => 6],
        //     ['image_path' => 'something', 'position' => 7],
        // ]);

        // $car = Car::find(1);
        // dd($car->carType);

        
        // $carType = CarType::where('name', 'Hatchback')->first();
        
        // dd($carType->cars); 
        
        // $cars = $carType->cars;
        // $cars = Car::whereBelongsTo($carType)->get();
        
        // dd($cars);
        

        // $car = Car::find(1);

        // $carType = CarType::where('name', 'Sedan')->first();

        // $car->car_type_id = $carType->id;
        // $car->save();

        // $car->carType()->associate($carType);
        // $car->save();

        // $car = Car::find(1);
        // dd($car->favouredUsers);
        
        // $user = User::find(id: 1);
        // dd($user->favouriteCars);

        // $user = User::find(1);
        // $user->favouriteCars()->attach([1, 2]);

        // $user->favouriteCars()->sync([3]);
        // $user->favouriteCars()->syncWithPivotValues([3]);

        // $user->favouriteCars()->detach([1, 3]);
        
        // Detach everything
        // $user->favouriteCars()->detach();

        // Simply create but not inserting to database
        // $maker = Maker::factory()->make();

        // Inserting record to database
        // $maker = Maker::factory()->count(10)->create();
        // dump($maker);

        // User::factory()->count(10)->create([
        //     'name' => 'Mukhlis'
        // ]);

        // $user = User::factory()->count(10)->state(   [
        //      'name' => 'Mukhlis'
        // ])->make();

        // $user = User::factory()->count(10)
        // ->sequence(   
        // ['name' => 'Mukhlis'],
        //     ['name' => 'Anshary'])
        // ->sequence(fn (Sequence $sequence)=> ['name' => 'Name '. $sequence->index])
        //     ->create();

        // User::factory()
        // ->count(10)
        // ->state(['email_verified_at' => null])
        // ->create();

        // User::factory()
        // ->afterCreating(function (User $user) {
        //     dump($user);
        // })
        // ->create();

        // Maker::factory()
        // ->count(1)
        // // ->hasModels(5)
        // ->has(CarModel::factory()->count(3))
        // ->create();

        // CarModel::factory()
        // ->count(5)
        // // ->forMaker(['name'=>"Lexus"])
        // ->for(Maker::factory()->state(['name' => 'Lexus']))
        // ->create();

        // User::factory()
        // ->has(Car::factory()->count(5), 'favouriteCars')
        // // ->hasAttached(Car::factory()->count(5), ['col1' => 'va'] ,'favouriteCars')
        // ->create();

        // $cars = Car::where('published_at', '<', now())
        // ->orderBy('published_at', 'desc')
        // ->limit(30)
        // ->get();

        $cars = Car::where('published_at', '<', now())
        ->with(['primaryImage', 'city', 'maker', 'carModel', 'carType', 'fuelType'])
        ->orderBy('published_at', 'desc')
        ->limit(30)
        ->get();

        return view('home/index', ['cars' => $cars]);
    }
}
