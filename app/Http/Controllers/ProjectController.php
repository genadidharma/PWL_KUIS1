<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        echo 'Project';
    }

    public function show($slug){
        echo $slug;
    }
}
