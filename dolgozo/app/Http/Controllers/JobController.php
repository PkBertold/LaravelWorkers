<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
    public function listUser() {
 
        return Job::find(1)->dolgozo;
    }
}
