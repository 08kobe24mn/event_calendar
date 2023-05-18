<?php

namespace App\Http\Controllers\EventCalendar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use stdClass;

class MenuController extends Controller
{
    public function index(Request $request)
    {
        $user = new stdClass();
        $user->image = null;

        return Inertia::render('Menu/Index', [
            'user' => $user,
        ]);
    }
}
