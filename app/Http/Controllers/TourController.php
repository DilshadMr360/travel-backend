<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;

class TourController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $query = Tour::query();

        if ($search) {
            $query->where('title', 'LIKE', "%{$search}%")
                  ->orWhere('description', 'LIKE', "%{$search}%")
                  ->orWhere('price', 'LIKE', "%{$search}%");
        }

        $tours = $query->get();

        return response()->json($tours);
    }
    
}
