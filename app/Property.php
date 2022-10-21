<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    //

    //use HasFactory;
    protected $table = 'properties';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'type', 'description'];
}
