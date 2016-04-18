<?php


namespace App;


class ProfileHTML extends AbstractProfiler
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