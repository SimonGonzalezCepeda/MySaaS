<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{
    public function store()
    {
        User::create(['name' => 'Pepito','email' => 'pepito@pepito.com']);

        $this->userHasChanged();
    }

    public function update()
    {
        $user = User::first();

        $user->name='Pepito';

        $user->save();

        $this->userHasChanged();
    }

    public function destroy($id)
    {
        User::destroy($id);

        $this->userHasChanged();

    }

    public function userHasChanged()
    {
        Event::fire('users.change');
    }
}
