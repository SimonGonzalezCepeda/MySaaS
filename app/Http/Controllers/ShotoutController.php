<?php


namespace App\Http\Controllers;


class ShotoutController extends Controller
{
    public function shotout()
    {
        $shotout= [];
        event(new AddShotout($shotout));
    }
}