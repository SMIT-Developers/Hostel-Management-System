<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hostel extends Model
{
    use HasFactory;


    protected $table = 'hostel';

    protected $fillable =[
        'name',
        'address',
        'academic_year',
        'nofbeds',
        'nofrooms'
    ];
}
