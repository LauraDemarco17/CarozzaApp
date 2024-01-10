<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    use HasFactory;

    //enable mass assignment
    protected $fillable = ['name', 'address', 'phone'];

    public function cars(){
        //establish one to many relationship with the model contact
        return $this->hasMany(Car::class); //Manufacturer model has many cars
    }


}
