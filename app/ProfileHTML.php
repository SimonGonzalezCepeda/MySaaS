<?php


namespace App;


class ProfileHTML extends AbstractProfiler implements Profile
{
    public function show($user)
    {
        return "
        <div>
        Id: <b> " . $this->getUserId() . "</b><br/>
        Name: " . $this->name . "
        </div>";
    }

}