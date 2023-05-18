<?php

namespace App\Http\Controllers\EventCalendar;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Inertia\Inertia;
use Inertia\Response;
use stdClass;

class SelectFunctionController extends Controller
{
    public function index(Request $request): Response
    {
        $user = new stdClass();
        $user->image = null;

        return Inertia::render('Menu/Index', [
            'user' => $user,
        ]);
    }
}
