<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;



class PortfolioController extends Controller
{
    public function index(): JsonResponse
    {
        $portfolios = Portfolio::all(); 
        return response()->json($portfolios);
    }
}