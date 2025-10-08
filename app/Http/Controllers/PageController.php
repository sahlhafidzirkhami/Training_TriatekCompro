<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function softwareDevelopment()
    {
        // Mengembalikan view halaman Software Development
        return view('services.software', [
            'title' => 'Software Development'
        ]);
    }
}
