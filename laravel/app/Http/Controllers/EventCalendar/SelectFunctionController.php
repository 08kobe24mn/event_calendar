<?php

namespace App\Http\Controllers\EventCalendar;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Inertia\Inertia;
use Inertia\Response;

class SelectFunctionController extends Controller
{
    public function index(Request $request): Response
    {
        return Inertia::render('Menu/index');
    }
}
