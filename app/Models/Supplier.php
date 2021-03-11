<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    public $table = "supplier";
    use HasFactory;

    public static function supplier() {
        return Supplier::orderBy('name')
            ->get();
    }
}
