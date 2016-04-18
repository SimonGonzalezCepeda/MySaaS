<?php


namespace App;


class ProfileJson extends AbstractProfiler
{
    public function show($user)
    {
        return "<JSON>
        Id: <b> \" . $this->getUserId() . \"</b><br/>
        Name: \" . $this->name . \"
        </JSON>";
    }
}