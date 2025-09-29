<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    //
    use HasFactory;
    public $timestamps = false;

    protected $table = "car_models";

    protected $fillable = [
        'name',
        'maker_id',
    ];

    public function cars(){
        return $this->hasMany(Car::class);
    }

    public function maker(){
        return $this->belongsTo(Maker::class);
    }
}
