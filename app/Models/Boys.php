<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Boys extends Model
{
    use HasFactory;

    protected string $table ='boys';

    protected array $fillable = [
        'Index_Number',
        'Name',
        'Academic_year'
    ];

    public static function getBoys(){
        $records = DB ::table('boys') -> select( 'Index_Number', 'Name',
            'Academic_year');
        return $records;
    }

}
