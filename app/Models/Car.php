<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    //enable mass assignment
    protected $fillable = ['model', 'year', 'salesperson_email', 'manufacturer_id'];


    public function manufacturer(){
        //establish one to many relationship with the model contact
        return $this->belongsTo(Manufacturer::class); //Manufacturer model has many cars
    }



}
