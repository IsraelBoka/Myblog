<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use ProtoneMedia\Splade\SpladeTable;

class UserController 
{
    public function __invoke(Request $request)
    {
        return view('users');
    }
}
