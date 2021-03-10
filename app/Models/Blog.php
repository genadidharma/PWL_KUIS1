<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    public static function blogs(){
        return Project::orderBy('category')
            ->get();
    }

    public static function getProjectBySlug($slug){
        return Project::where('slug', $slug)
            ->first();
    }
}
