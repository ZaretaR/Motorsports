<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog() {
        return Inertia::render('Blog');
    }
}