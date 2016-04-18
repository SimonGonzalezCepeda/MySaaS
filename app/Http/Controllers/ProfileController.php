<?php

namespace App\Http\Controllers;

use App\ProfileHTML;
use App\Profile;
use Auth;
use Illuminate\Http\Request;

use App\Http\Requests;

class ProfileController extends Controller
{
    public function show(Profile $profile)
    {
        $profile->show(Auth::user());
    }
}
