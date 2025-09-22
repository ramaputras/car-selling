<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Database\Factories\ModelFactory;
use Illuminate\Database\Eloquent\Model as EloquentModel;

class Model extends EloquentModel
{
    //
    use HasFactory;
    public $timestamps = false;

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

    protected static function newFactory(){
        return ModelFactory::new();
    }
}
