<?php


namespace App;

abstract class AbstractProfiler implements Profile
{
    protected function getUserId($user)
    {
        return $user->id;
    }
}