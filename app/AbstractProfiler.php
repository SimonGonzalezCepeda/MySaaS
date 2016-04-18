<?php


namespace App;


class AbstractProfiler
{
    protected function getUserId($user)
    {
        return $user->id;
    }
}