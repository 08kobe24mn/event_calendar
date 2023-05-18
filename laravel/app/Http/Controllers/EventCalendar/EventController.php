<?php

namespace App\Http\Controllers\EventCalendar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class EventController extends Controller
{
    public function index(Request $request)
    {
        return Inertia::render('Event/Index');
    }
}
